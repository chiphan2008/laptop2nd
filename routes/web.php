<?php

\View::share('ADMIN_ROUTE','admincp');
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

Route::get('/auth/login', function(){
    return view('admin.login');
})->name('login');

Route::post('/auth/login', 'LoginController@authenticate');

Route::group(['prefix' => 'admincp','middleware'=>'guest'], function (){
  Route::get('/logout', function(){
  	session()->flush();
  	return redirect()->route('login');
  })->name('logout');
  Route::get('/', 'AdminController@index')->name('dashboard');

  //news
  Route::get('/news', 'AdminController@getNews')->name('news');
  Route::get('/news/form/{id?}', 'AdminController@getNewsForm');
  Route::post('/news/form/{id?}', 'AdminController@postNewsForm');
  Route::get('/news/delete/{id}', 'AdminController@getDelNews');

});

// Route::get('/adminlevel/register', function(){
//     return view('auth.register');
// })->name('register');
// Auth::routes();
