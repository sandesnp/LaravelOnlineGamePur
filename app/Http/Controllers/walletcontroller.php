<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wallet;
use DB;
use Auth;
use App\User;
use Session;

class walletcontroller extends Controller
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
        $wallets = DB::table('wallets')->where('user_id', auth()->id())->get();
        if(count($wallets)>=1)
        {
            $contact=DB::select('select name from contact order by created_at desc limit 5');
            return view('wallet.walletupdate')->with('wallets',$wallets)->with('contact',$contact);
        }
        else{
            $contact=DB::select('select name from contact order by created_at desc limit 5');
            return view('wallet.walletcreate')->with('wallets',$wallets)->with('contact',$contact);
        }
        ;
       
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
        
        $this->validate($request,[
            'full_name'=>'required',
            'cardnumber'=>'required',
            'month'=>'required',
            'year'=>'required',
            'day'=>'required',
            'wallet_amount'=>'required|gt:0|max:9999'
        ]);

       


        $wallet= new wallet;
        
        $wallet->walletsum=$request->input('wallet_amount');
        $wallet->user_id=auth()->user()->id;
       
        $wallet->save();

        //Putting wallet value on a session so it can be loaded on nav
        $user=User::find(auth()->user()->id);
        $walletofuser=$user->wallet;
        if(!empty($walletofuser))
        {
        Session::put('walletamt',$walletofuser->walletsum);
        }
        
        return redirect('wallet')->with('success','You have succesfully saved on your wallet.');
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
        $wallet = DB::table('wallets')->select('users.lastname','users.firstname','wallets.id','wallets.walletsum')->join('users', 'users.id', '=', 'wallets.user_id')
        ->where('wallets.id','=',$id)->first();
        $site='Wallet Edit';
        return view('admincontrol.wallet.awalletedit')->with('wallet',$wallet)->with('site',$site);
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
        
       if(isset($request->walletadmin))
       {
        $this->validate($request,[
            'wallet_amount'=>'required|gt:0|max:9999'

        ]);

        $wallet=wallet::find($id);

        $wallet->walletsum=$request->input('wallet_amount');
        $wallet->save();


        return redirect('awallet')->with('success','Wallet Has been updated');
       }
        
        $this->validate($request,[
            'full_name'=>'required',
            'cardnumber'=>'required',
            'month'=>'required',
            'year'=>'required',
            'day'=>'required',
            'wallet_amount'=>'required|gt:0|max:9999'
        ]);
        //Bringing the wallet amount of the person and adding from wallet to it
        $wallets = DB::table('wallets')->where('user_id', auth()->id())->first();
        $newsum=$wallets->walletsum+$request->wallet_amount;
        
        
       $id=$wallets->id;
      
        $wallet= wallet::where('user_id',auth()->user()->id)->first();
        
        $wallet->walletsum=$newsum;
        
        $wallet->save();

        //Putting wallet value on a session so it can be loaded on nav
        $user=User::find(auth()->user()->id);
        $walletofuser=$user->wallet;
        if(!empty($walletofuser))
        {
        Session::put('walletamt',$walletofuser->walletsum);
        }
        
        return redirect('wallet')->with('success','You have succesfully updated your wallet.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //Subtracting wallet sum in wallet table
    public function subtractwallet($request)
    {
        Session::put('walletamt',Session::get('walletamt')-$request->product_price);
        $wallet= wallet::where('user_id',auth()->user()->id)->first();
        
        $wallet->walletsum=Session::get('walletamt');
        
        $wallet->save();

    }
}
