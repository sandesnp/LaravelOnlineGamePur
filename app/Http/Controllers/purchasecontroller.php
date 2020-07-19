<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\product;
use DB;
use AUTH;
use Session;

class purchasecontroller extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adminaccess',['only'=>['edit','destroy']]);//Users cannot route through these function.
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Library
        $game_type = user::find(auth()->user()->id)->product()->paginate(3); // finding all the products with logged in userid. Also, used () at end of product since we are adding another function i.e paginate.
        $game='My games';
        $contact=DB::select('select name from contact order by created_at desc limit 5');
        return view('pages.mygame')->with('game_type',$game_type)->with('game',$game)->with('contact',$contact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Session::get('walletamt')>$request->product_price)
        {          
            $user=User::find(auth()->user()->id);
            $condition = DB::select('select * from purchase where user_id = ? and product_id= ?', [auth()->user()->id,$request->id]);
            $conditionCount=Count($condition);
            //Checking if he has already bought the game.
            if($conditionCount>0)
            {
                return redirect('product/')->with('error','You have already purchased this game.');
            }
            else
            {
            $user->product()->attach($request->id); //In purchase table adding new row with user_id and product_id aka purchase.
            
            //Subtracting from the wallet
            $subwall=new walletcontroller;
            $subwall->subtractwallet($request);
            //End

            return redirect('product/'.$request->id)->with('success','You have purchased a game.');
            }
        }
        return redirect('product/'.$request->id)->with('error','You do not have enough wallet sum.');
    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = DB::table('purchase')
        ->select('users.email','products.product_name','purchase.id','purchase.reviewcontent')
        ->join('users', 'users.id', '=', 'purchase.user_id')
        ->join('products', 'products.id', '=', 'purchase.product_id')
        ->where('purchase.reviewcontent','!=','')->where('purchase.id','=',$id)->first();
        $site='Review Edit';
        return view('admincontrol.review.areviewedit')->with('review',$review)->with('site',$site);
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
        

        if(isset($request->reviewadmin)) //ADMIN UPDATE
            {
                DB::update('update purchase set reviewcontent=? where id=?',[$request->review_content, $id]);
                return redirect('areview/')->with('success','Review has been updated');
            }

            if(isset($request->reviewadmindel)) //ADMIN DELETE
            {
                $request->review_content='';
                DB::update('update purchase set reviewcontent=? where id=?',[$request->review_content, $id]);
                return redirect('areview/')->with('success','Review has been Deleted');
            }
        $message= 'Review has been posted.';

        if(isset($request->delete) || $request->delete == 'Delete')
        {
           $request->review_content='';
           $message='Your review has been deleted.';
           
        }

        if(isset($request->update) || $request->update == 'Update')
        {
            
            
        }

        //Its here because it wont let Delete here.
        $this->validate($request,[
            'review_content'=>'required|max:300|min:30'
        ]);

       // $request->review_content, auth()->user()->id, $id
      DB::update('update purchase set reviewcontent=?, created_at=? where user_id=? and product_id=?',[$request->review_content, date('Y-m-d'), auth()->user()->id, $id]);
      return redirect('product/'.$id)->with('success',$message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Review is updated to be blank.
    }



    //Custom Rate method
    public function Rates($product_id,$rating)
    {
        //Since when game is bought a row is created. Here when star is clicked is ingame page, rate is updated here.
        DB::update('update purchase set rating=? where user_id=? and product_id=?',[$rating, auth()->user()->id, $product_id]);
        return 'Rated!';  
    }
}
