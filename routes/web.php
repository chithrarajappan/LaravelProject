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

/*Route::get('/', function () {
    return view('');
});*/

/* ------ Login -----*/
Route::get('/', 'ExamLoginController@index');
Route::post('login_action/', array('uses'=>'ExamLoginController@postLogin'));

/* ------ New Account -----*/
Route::get('/newaccount', 'ExamLoginController@newAccount');
Route::post('newaccount_action/', array('uses'=>'ExamLoginController@postNewAccount'));

/* ------- Auth -------*/
Route::group(['middleware'=>'auth'],function()
{
    Route::get('dashbord', 'DashbordController@dashBord');
});

/* ------ logout -----*/
Route::get('/logout', function()
   {  
      Auth::logout();
      return view('login');
  })->name('login');

/* ------- profile ----- */

Route::get('/profile/{name}','DashbordController@profile');
Route::get('/flot','DashbordController@flot');
Route::get('/morris','DashbordController@morris');
Route::get('/alluser','DashbordController@allUser');
