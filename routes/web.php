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
//Route::get('/tst.html', function () {
//    return view('layouts.contacttemplate');
//});

Route::get('/','LaptopController@index')->name('index');
Route::get('/gio-hang.html','LaptopController@getCart')->name('cart');
Route::get('/xac-nhan-dat-hang.html', 'LaptopController@checkout')->name('checkout');
Route::get('/dat-hang-thanh-cong.html', function(){
  return view('order_success');
})->name('order_success');
Route::post('/xac-nhan-dat-hang.html', 'LaptopController@postCheckout');
Route::post('/gio-hang.html', 'LaptopController@handlePostCart');
Route::get('/area/{id_parent}', 'LaptopController@getArea');
Route::prefix('/cart')->group( function () {
  Route::get('/{act}/{idsp}/{qty?}', 'LaptopController@handleCart');
  Route::post('/delivery', 'LaptopController@getDelivery');
});

Route::get('/lien-he.html', 'LaptopController@getContact')->name('contact');
Route::post('/lien-he.html', 'LaptopController@postContact');

Route::get('/gioi-thieu.html', function () {
    return view('about');
})->name('about');
Route::get('/cong-nghe.html', 'LaptopController@getTech')->name('tech');
Route::post('/tim-kiem.html', 'LaptopController@getSearch')->name('search');
Route::get('/cong-nghe/{alias}.html', 'LaptopController@getDetailTech');
Route::get('/san-pham.html', 'LaptopController@getShop')->name('shop');
Route::get('/san-pham/{alias}.html','LaptopController@getDetailProduct');
Route::post('/san-pham/{alias}.html','LaptopController@handleCart');
Route::get('/san-pham/{alias}', 'LaptopController@getCategory');

/*
|--------------------------------------------------------------------------
| Api
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'apis'],function(){
    Route::get('/get-logo','LaptopController@getBrand');
    Route::get('/get-banner','LaptopController@getBanner');
    Route::get('/get-slider','LaptopController@getSlider');
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
  Route::get('/change-password', function(){
    return View('admin.changepwd');
  })->name('change_pwd');
  Route::post('/change-password', 'LoginController@postChangePwd');
  Route::get('/', 'AdminController@index')->name('dashboard');
  Route::post('/', 'AdminController@importFile');

  //slider
  Route::get('/slide', 'AdminController@getSlide')->name('slide');
  Route::post('/slide', 'AdminController@postSlide');
  Route::get('/slide/form/{id?}', 'AdminController@getSlideForm');
  Route::post('/slide/form/{id?}', 'AdminController@postSlideForm');
  Route::get('/slide/delete/{id}', 'AdminController@deleteSlide');
  //logo
  Route::get('/logo', 'AdminController@getLogo')->name('logo');
  Route::post('/logo', 'AdminController@postLogo');
  Route::get('/logo/form/{id?}', 'AdminController@getLogoForm');
  Route::post('/logo/form/{id?}', 'AdminController@postLogoForm');
  Route::get('/logo/delete/{id}', 'AdminController@deleteLogo');
  //banner
  Route::get('/banner', 'AdminController@getBanner')->name('banner');
  Route::post('/banner', 'AdminController@postBanner');
  //info
  Route::get('/info', 'AdminController@getInfo')->name('info');
  Route::post('/info', 'AdminController@postInfo');
  //maps
  Route::get('/map', 'AdminController@getMap')->name('map');
  Route::post('/map', 'AdminController@postMap');
  //promotion NOT...YET
  Route::get('/promotion', 'AdminController@getPromotion')->name('promotion');
  //news
  Route::get('/news', 'AdminController@getNews')->name('news');
  Route::post('/news', 'AdminController@postNews');
  Route::get('/news/form/{id?}', 'AdminController@getNewsForm');
  Route::post('/news/form/{id?}', 'AdminController@postNewsForm');
  Route::get('/news/delete/{id}', 'AdminController@deleteNews');
  //category
  Route::get('/category', 'AdminController@getCat')->name('category');
  Route::post('/category', 'AdminController@postCat');
  Route::get('/category/delete/{id}', 'AdminController@deleteCat');
  Route::get('/category/form/{id?}', 'AdminController@getCatForm');
  Route::post('/category/form/{id?}', 'AdminController@postCatForm');
  //product
  Route::get('/product', 'AdminController@getProduct')->name('product');
  Route::post('/product', 'AdminController@postProduct');
  Route::get('/product/delete/{id}', 'AdminController@deleteProduct');
  Route::get('/product/form/{id?}', 'AdminController@getProductForm');
  Route::post('/product/form/{id?}', 'AdminController@postProductForm');
  Route::get('/product/delete_hinhsp/{idsp}/{loc}', 'AdminController@delHinhsp');
  //client NOT...YET
  Route::get('/client', 'AdminController@getProduct')->name('client');
  //order NOT...YET
  Route::get('/order', 'AdminController@getProduct')->name('order');


});

// Route::get('/adminlevel/register', function(){
//     return view('auth.register');
// })->name('register');
// Auth::routes();
