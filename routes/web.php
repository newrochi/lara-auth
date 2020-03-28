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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;


Route::get('/', function () {

    //Impo!!!      Might be needed later
    // $url=URL::temporarySignedRoute('test',now()->addMinute(60),['id'=>10]);
    // dd($url);
    return view('welcome');
})->name('home');

Route::group(['prefix' => 'auth','namespace'=>'Auth'], function () {
    Route::get('register','RegisterController@showRegistrationForm')->name('auth.register.form');
    Route::post('register','RegisterController@register')->name('auth.register');

    Route::get('login','LoginController@showLoginForm')->name('auth.login.form');
    Route::post('login','LoginController@login')->name('auth.login');

    Route::get('logout','LoginController@logout')->name('auth.logout');

});


// Route::get('test',function(Request $request){
//     Url::hasValidSignature($request);
// })->name('test');



