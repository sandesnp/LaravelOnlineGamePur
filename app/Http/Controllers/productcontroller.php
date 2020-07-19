<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\user;
use DB;
use AUTH;
use Hash;
use Session;
use Storage;
use Artisan;

class productcontroller extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Artisan::call('storage:link');
        $this->middleware('auth',['only'=>['checkout']]);
        $this->middleware('adminaccess',['only'=>['create','edit','destroy']]);//Users cannot route through these function.
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game_type = DB::table('products')->paginate(4);
        $game= 'All Games';
        $contact=DB::select('select name from contact order by created_at desc limit 5');
        return view('pages.game')->with('game_type',$game_type)->with('game',$game)->with('contact',$contact);
    }






    public function indexrpg()
    {
        $game_type = DB::table('products')->where('product_type', 'RPG')->paginate(3);
        $game= 'RPG Games';
        $contact=DB::select('select name from contact order by created_at desc limit 5');
        return view('pages.game')->with('game_type',$game_type)->with('game',$game)->with('contact',$contact);
    }

    public function indexsport()
    {
        $game_type = DB::table('products')->where('product_type', 'Sport')->paginate(3);
        $game= 'Sport Games';
        $contact=DB::select('select name from contact order by created_at desc limit 5');
        return view('pages.game')->with('game_type',$game_type)->with('game',$game)->with('contact',$contact);
    }

    public function indexonline()
    {
        $game_type = DB::table('products')->where('product_type', 'Online')->paginate(3);
        $game= 'Online Games';
        $contact=DB::select('select name from contact order by created_at desc limit 5');
        return view('pages.game')->with('game_type',$game_type)->with('game',$game)->with('contact',$contact);
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $site='Product Edit';
        return view('admincontrol.product.create')->with('site',$site);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
         $this->validate($request,[

        'product_name'=>'required|unique:products',
        'product_intro'=>'required',
        'product_price'=>'required|gt:0|max:9999',
        'product_developer'=>'required',
        'product_image'=>'required|image|max:1999',
        'os'=>'required',
        'ram'=>'required',
        'processor'=>'required',
        'graphics'=>'required',
        'network'=>'required'

        //requirement

        ]);
        

        //Handling Image Upload
        if($request->hasfile('product_image')){

            //Get filename with the extension
            $imagenamewithext=$request->file('product_image')->getClientOriginalName();
            
            //get just filename
            $imagename= pathinfo($imagenamewithext, PATHINFO_FILENAME);

            //Get Just ext
            $extension= $request->file('product_image')->guessClientExtension();

            //filename to store
            $imageNameToStore= $imagename.'_'.time().'.'.$extension;

            //upload image
            $path= $request->file('product_image')->storeAs('public/Product_images',$imageNameToStore);
        }
        
        
       
        
        $product = new product;

        $product->product_name=$request->input('product_name');
        $product->product_intro=$request->input('product_intro');
        $product->product_price=$request->input('product_price');
        $product->product_developer=$request->input('product_developer');
        $product->product_type=$request->input('product_type');
        $product->product_image=$imageNameToStore;
        $product->Save();

        //Transferring data to req controller

        $request->request->add(['product_id' => product::max('id')]);

        $req= new requirementcontroller;
        $req->store($request);
        
        return redirect('product/create')->with('success','Game has been inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id>0)
        {
        if(Auth::check())
        {
         // JUST IN CASE IF WALLET VALUE ISNT EXTRACTED IN SESSION.
         $userswallet=User::find(auth()->user()->id)->wallet;
         if(!empty($userswallet))
         {
         Session::put('walletamt',$userswallet->walletsum);
         }
        }
         //END

        //Giving 404 link to N/A
        if($id==9999)
        {
           return redirect('N/a');
        }
        $product = DB::table('products')->where('id', $id)->first();
        //Bringing Requirement
        $requirement = DB::table('requirements')->where('product_id', $id)->get();

       //review of the logged in user for a specific product
       if($user = Auth::user()){
            $review= user::find(auth()->user()->id)->product()->wherePivot('product_id', '=', $id)->first();
        }
        else{ 
            $review=""; 
        }
        
        //Brining All reviews
        $allreview=product::find($id)->user()->wherePivot('reviewcontent','!=','')->get();
        
        // $allreview= DB::table('purchase')->where('product_id', '=', $id)->where('reviewcontent', '!=', '')->paginate(5);

        //Average Rating
        $countUserWhoRated=DB::select('select * from purchase where rating >0 and product_id=?',[$id]);
        $count_UserWhoRated=count($countUserWhoRated);
      
         $SumOfRates = DB::table('purchase')->where('product_id', '=', $id)->sum('rating');
       

        if($SumOfRates>0)
        {
            $avgRate=$SumOfRates/$count_UserWhoRated;
           
        }
        else{ $avgRate='Not Rated'; }
       
    //Bringing 7 games
      $game_type = DB::table('products')->get();
     
      $countProduct=count($game_type);
      
       for($i = $countProduct;$i<7;$i++)
        {
            $name=$i;
            $addToProduct = ["id"=>"9999","product_image" => "no-image_1560528231.jpeg", "product_name" => "N/A","product_type"=>'N/A'];
            $row = (object) $addToProduct;
            $game_type->put($i, $row);
        } 
        

        $contact=DB::select('select name from contact order by created_at desc limit 5');
       return view('pages.ingame')->with('products',$product)->with('requirement',$requirement)->with('game_type',$game_type)->with('review',$review)->with('avgrate',$avgRate)->with('allreview',$allreview)->with('contact',$contact);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        $site='Product Edit';
        return view('admincontrol.product.aproductedit')->with('product',$product)->with('site',$site);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = count(DB::table('products')->where('product_name',$request->product_name)->get());
        if ($product>0)
        {
            return redirect('product/'.$id.'/edit')->with('error','Product Name already exist');
        }        
        $this->validate($request,[

            'product_intro'=>'required',
            'product_price'=>'required|gt:0|max:9999',
            'product_developer'=>'required',
            'product_image'=>'image|max:1999',
    
            //requirement
    
            ]);
    
            //Handling Image Name and its Upload
            if($request->hasfile('product_image')){
    
                //Get filename with the extension
                $imagenamewithext=$request->file('product_image')->getClientOriginalName();
                
                //get just filename
                $imagename= pathinfo($imagenamewithext, PATHINFO_FILENAME);
    
                //Get Just ext
                $extension= $request->file('product_image')->guessClientExtension();
    
                //filename to store
                $imageNameToStore= $imagename.'_'.time().'.'.$extension;
    
                //upload image
                $path= $request->file('product_image')->storeAs('public/Product_images',$imageNameToStore);
            }
            
            
           
            
            $product = product::find($id);

            if($request->product_name!='')
            {
                $product->product_name=$request->input('product_name');
            }
            $product->product_intro=$request->input('product_intro');
            $product->product_price=$request->input('product_price');
            $product->product_developer=$request->input('product_developer');
            $product->product_type=$request->input('product_type');
            //$product->product_image=$imageNameToStore;
            if ($request->hasFile('product_image')) {
                
                  Storage::delete('public/product_images/'.$product->product_image);
                
                  $product->product_image=$imageNameToStore;
              }
            $product->Save();

            return redirect('/aproduct')->with('success','Product has be Updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productDelete = Product::find($id); // Finding table with a specific primary key then deleting it
        $deletedPivot = DB::delete('delete from purchase where product_id=?',[$id]); // Deleted from related models
        $deletedrequirement = DB::delete('delete from requirements where product_id=?',[$id]);
        $productDelete->delete();
        return redirect('/aproduct')->with('success','Product is Deleted');
    }

    //Searching Products
    public function searchProduct($product_name)
    { 
        //AJAX reads this
        $productser = Product::where('product_name','LIKE','%'.$product_name.'%')->get();
        //Taking AJAX TO ADDBAR page
        return view('inc.addBar')->with('productser',$productser);
    }

    public function getSearch(Request $request)
    {
        
        $productser = Product::where('product_name','LIKE','%'.$request->search.'%')->paginate(3);
        
        // $countsearch=count($productser);
        if(count($productser)>1)
        {
            $game= 'Search';
            return view('pages.game')->with('game_type',$productser)->with('game',$game);
            
        }
        elseif(count($productser)==1)
        {
            foreach($productser as $prods)
            {
            return redirect('product/'.$prods->id);
            }
        }
        else{
            $game= 'No Result';
            return view('pages.game')->with('game_type',$productser)->with('game',$game);
        }
      
      
    }


    //Checkout Purchase
    public function checkout(Request $request)
    {


        if(Session::get('walletamt')>$request->product_price)
        {
        return view('pages.checkout')->with('products',$request);
        }
        return redirect('product/'.$request->id)->with('error','You do not have enough wallet sum.');
        
    }
}
