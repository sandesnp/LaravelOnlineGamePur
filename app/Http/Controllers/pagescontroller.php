<?php

namespace App\Http\Controllers;
use App\User;
use App\product;
use App\wallet;
use app\requirement;
use DB;
use AUTH;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{   

    public function genre(){
        
        $contact=DB::select('select name from contact order by created_at desc limit 5');
        return view('pages.genre')->with('contact',$contact);
    }

    public function contact(){
    
        $contact=DB::select('select name from contact order by created_at desc limit 5');
        return view('pages.contact')->with('contact',$contact);
    } 

    public function faq(){
    
        $contact=DB::select('select name from contact order by created_at desc limit 5');
        return view('pages.faq')->with('contact',$contact);
    } 


    // ADMIN PANEL FOR BREAD
    //Dashboard
    public function adashboard(){
    $site='Dashboard';
    
        return view('admincontrol.adashboard')
        ->with('countuser', count(DB::select('select * from users')))
        ->with('countproduct', count(DB::select('select * from products')))
        ->with('countreq', count(DB::select('select * from requirements')))
        ->with('countwallet', count(DB::select('select * from wallets')))
        ->with('countreview', count(DB::select('select * from purchase where reviewcontent !="" ')))
        ->with('site',$site);
    } 

    public function auser(){
        $site='User BREAD';

        $alluser=DB::table('users')->paginate(6);
            return view('admincontrol.user.auser')->with('site',$site)->with('alluser',$alluser);
        } 


    public function aproduct(){
    $site='Product BREAD';
    $allproduct=DB::table('products')->paginate(6);
        return view('admincontrol.product.aproduct')->with('allproduct',$allproduct)->with('site',$site);
    } 

    public function arequirement(){
        $site='Requirement BREAD';
        $allrequirement = DB::table('requirements')->select('*')->join('products', 'products.id', '=', 'requirements.product_id')->paginate(6);
        return view('admincontrol.requirement.arequirement')->with('allrequirement',$allrequirement)->with('site',$site);
        }

    public function awallet(){
        $site='Wallet BREAD';
        $allwallet = DB::table('wallets')->select('users.email','users.lastname','users.firstname','wallets.id','wallets.walletsum')->join('users', 'users.id', '=', 'wallets.user_id')->paginate(6);
            return view('admincontrol.wallet.awallet')->with('allwallet',$allwallet)->with('site',$site);
        }

    public function areview(){
        $site='Review BREAD';
        $allreview = DB::table('purchase')
        ->select('users.email','products.product_name','purchase.id','purchase.reviewcontent')
        ->join('users', 'users.id', '=', 'purchase.user_id')
        ->join('products', 'products.id', '=', 'purchase.product_id')
        ->where('purchase.reviewcontent','!=','')->paginate(6);
            return view('admincontrol.review.areview')->with('allreview',$allreview)->with('site',$site);
        }

        public function afaq(){
            $site='FAQ';
                return view('admincontrol.afaq')->with('site',$site);
            }
    
}
