<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use DB;
use auth;
use Session;
use Artisan;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
            $admin= new usercontroller;
            $admin->createadmin();
        
        
        

        if(Auth::check())  //if not done this then when clicked on home link it will direct to login.
        {

            //Finding wallet value based on userid of the person who logged in
        
            //Putting wallet value on a session so it can be loaded on nav

            $userswallet=User::find(auth()->user()->id)->wallet;
            //finding users with id xx and then finding wallet row which is related to that user.(foreignkey)
            if(!empty($userswallet))
            {
            Session::put('walletamt',$userswallet->walletsum);
            }
        }

        Artisan::call('storage:link');
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
        
        return view('pages.index')->with('game_type',$game_type)->with('contact',$contact);
    }

    public function contactsave( request $request)
    {
        $aa= date('Y-m-d');
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:contact',
            'message'=>'required',
        ]);

        DB::insert('insert into contact(name,email,message,created_at) values(?,?,?,?)',[$request->name,$request->email,$request->message, date('Y-m-d')]);

       
        return redirect('contact/')->with('success','Thank you for being part of our community.');
    }

    
}
