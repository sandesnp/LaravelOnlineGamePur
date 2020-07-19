<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/ck', function () {
//     return view('pages.check');
// });


//INDEX
Route::get('/', 'HomeController@index');

Route::any('/contactsave','HomeController@contactsave');

//REROUTE TO  pagescontroller
Route::get('/genre', 'pagescontroller@genre');

Route::get('/contact', 'pagescontroller@contact');

Route::get('/faq', 'pagescontroller@faq');

//For user
Route::resource('user','usercontroller');
Route::get('/cp','usercontroller@gotopasswordwithid');


//For wallet
Route::resource('wallet','walletcontroller');

//For product
Route::any('/getser','productcontroller@getSearch');

Route::get('/proser/{pro}','productcontroller@searchProduct');
Route::get('/rpggame','productcontroller@indexrpg');
Route::get('/sportgame','productcontroller@indexsport');
Route::get('/onlinegame','productcontroller@indexonline');
Route::resource('product','productcontroller');

Route::any('/checkout','productcontroller@checkout');



//For requirement
Route::resource('req','requirementcontroller');

//forpurchase
Route::get('pur/rating/{pur1}/{pur2}', 'purchasecontroller@Rates');
Route::resource('pur','purchasecontroller');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin pages ->BREAD

Route::get('/adash', 'pagescontroller@adashboard')->middleware('adminaccess');

Route::get('/auser', 'pagescontroller@auser')->middleware('adminaccess');

Route::get('/aproduct', 'pagescontroller@aproduct')->middleware('adminaccess');

Route::get('/arequirement', 'pagescontroller@arequirement')->middleware('adminaccess');

Route::get('/awallet', 'pagescontroller@awallet')->middleware('adminaccess');

Route::get('/areview', 'pagescontroller@areview')->middleware('adminaccess');

Route::get('/afaq', 'pagescontroller@afaq')->middleware('adminaccess');

