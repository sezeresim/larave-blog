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


use App\Ayar;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(["middleware"=>["admin_mi","auth"]],function (){
   
   Route::group(["namespace"=>"Admin"],function (){
       
       Route::get("/site-ayarlari","AyarController@index");
       Route::put("/site-ayarlari/guncelle","AyarController@guncelle");
       Route::resource("user","UserController");
   });
   
});