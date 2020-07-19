<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\wallet;
use DB;
use AUTH;
use Hash;

class usercontroller extends Controller
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

        $user = DB::table('users')->where('id', auth()->id())->get();

        
        
      // $user= User::select('firstname')->where('id', auth()->id())->get();
        
        return view('pageuser.eprofile')->with('user',$user);
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

    public function createadmin()
    {
        //ADMIN CREATED ON THREE PLACES. Here, AuthenticatesUsers and RegisterController
         //ADMIN ROW STORED ID=1. Its crucial for admins ID to be 1.

    $user = user::all();
    if(count($user)<1)
    {
        $admin= new user;
    $admin->email='admin@admin';
    $adminpassword= Hash::make('admin');
    $admin->password=$adminpassword;
    $admin->firstname='admin@admin';
    $admin->lastname='admin@admin';
    $admin->phoneno='admin@admin';
    $admin->address='admin@admin';

    $admin->Save();
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        $site='User Edit';
        return view('admincontrol.user.auseredit')->with('user',$user)->with('site',$site);
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
        
       //updating user info and his password with elseif
       if($request->check=="checking1")//Updating User Data
       {
           
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'address'=>'required',
            'phoneno'=>'required'
        ]);

        $user= User::find($id);
            
        $user->firstname= $request->input('firstname');
        $user->lastname= $request->input('lastname');
        $user->address= $request->input('address');
        $user->phoneno= $request->input('phoneno');
        $user->save();
        
            $goto='/user';
            if(isset($request->checkadmin))
            {
                $goto='/auser';
            }
            return redirect($goto)->with('success',' Profile is Updated');
        
       }
       elseif ($request->check=="checking2")  //Changing Password
       {
        $this->validate($request,[
            'current_password'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required',
        ]);

        $beforepassword = Auth::user()->getAuthPassword();
        //$nowpassword = Hash::make($request->current_password);  commented this cuz in if below current password is hashed so need here.
        $futurepassword= Hash::make($request->password);
        

        // current_password is 'enter your current password' to change it.
        if($request->password==$request->password_confirmation) //two password are enter password and enter password again.
        {
            if (Hash::check($request->current_password, $beforepassword)) { //current_password is not hashed because hash:check hashes the current password
                $puser= User::find($id);
                $puser->password= $futurepassword;
                $puser->save();
                return redirect('/cp')->with('success','Password was changed!!!');
            }
            else{ return redirect('/cp')->with('error','Current password does not match.'); }
        }
        else { return redirect('/cp')->with('error','New password doesnt match with re-entered password.'); }
       }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id!=1)
        {
        $userDelete = user::find($id); // Finding table with a specific primary key then deleting it
        $deletedPivot = DB::delete('delete from purchase where user_id=?',[$id]); // Deleted from related models
        $deletedWallet = DB::delete('delete from wallets where user_id=?',[$id]);
        $userDelete->delete();
        return redirect('/auser')->with('success','User is Deleted');
        }
        else{ return redirect('/auser')->with('error','Admin cannot be Deleted');}
       
        
        // App\wallet::destroy($id);
        // App\user::destroy($id);

    }


    public function gotopasswordwithid(){

        //Basically we sent buttons here to redirect them with a data which we use
        $user= User::select('id')->where('id', auth()->id())->get();
        return view('pageuser.changepassword')->with('user',$user);
    }

}
