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

Route::get('/', function () {
    return view('index');
});
Route::get('/gio-hang.html', function () {
    return view('cart');
});
Route::get('/xac-nhan-dat-hang.html', function () {
    return view('checkout');
});
Route::get('/lien-he.html', function () {
    return view('contact');
});
/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/
Route::get('/auth/login', function () {
    return view('admin.login');
});
Route::group(['prefix' => 'admincp'], function (){
  Route::get('/logout', function(){
  	session()->flush();
  	return redirect('/auth/login');
  });
  Route::get('/', function () {
      return view('admin.index');
  });

});
