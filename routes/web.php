<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'namespace' => 'backend',
    'prefix' => '',
    // 'middleware' => ['auth', 'auth_admin']
], function (){
    // Trang dashboard - trang chủ admin
      Route::get('/dashboard' , 'DashboardController@index')->name('dashboard');

    // Quản lý sản phẩm
    Route::group(['prefix' => 'products'], function(){
  		Route::get('/index' , 'ProductController@index')->name('products.index');
  		Route::get('/create' , 'ProductController@create')->name('products.create');
      Route::post('/store' , 'ProductController@store')->name('products.store');
      Route::get('/get-data' , 'ProductController@getData')->name('products.getdata');
      Route::get('/edit/{products}' , 'ProductController@edit')->name('products.edit');
      Route::put('/update/{products}' , 'ProductController@update')->name('products.update');
      Route::delete('/destroy/{products}' , 'ProductController@destroy')->name('products.destroy');
    });


    // Quản lý người dùng
    Route::group(['prefix' => 'users'], function(){
      Route::get('/index' , 'UserController@index')->name('users.index');
      Route::get('/get-data' , 'UserController@getData')->name('users.getdata'); // Thêm mới getdata
  		Route::get('/create' , 'UserController@create')->name('users.create');
      Route::post('/store' , 'UserController@store')->name('users.store');
      Route::get('/edit/{users}' , 'UserController@edit')->name('users.edit');
      Route::put('/update/{users}' , 'UserController@update')->name('users.update');
      Route::delete('/destroy/{users}' , 'UserController@destroy')->name('users.destroy');
    });



    // Quản lý danh mục sản phẩm
    Route::group(['prefix' => 'categories'], function(){
      Route::get('/index' , 'CategoryController@index')->name('categories.index');
      Route::get('/get-data' , 'CategoryController@getData')->name('categories.getdata');
      Route::get('/create' , 'CategoryController@create')->name('categories.create');
      Route::post('/store' , 'CategoryController@store')->name('categories.store');
      Route::get('/edit/{id}' , 'CategoryController@edit')->name('categories.edit');
      Route::put('/update/{id}' , 'CategoryController@update')->name('categories.update');
      Route::delete('/destroy/{id}' , 'CategoryController@destroy')->name('categories.destroy');
    });


    // Quản lý thương hiệu
      Route::group(['prefix' => 'trademarks'], function(){
        Route::get('/index' , 'TrademarkController@index')->name('trademarks.index');
        Route::get('/create' , 'TrademarkController@create')->name('trademarks.create');
        Route::post('/store' , 'TrademarkController@store')->name('trademarks.store');
        Route::get('/get-data' , 'TrademarkController@getData')->name('trademarks.getdata');
        Route::get('/edit/{id}' , 'TrademarkController@edit')->name('trademarks.edit');
        Route::put('/update/{id}' , 'TrademarkController@update')->name('trademarks.update');
        Route::delete('/destroy/{id}' , 'TrademarkController@destroy')->name('trademarks.destroy');
    });


    // Quản lý bài viết
      Route::group(['prefix' => 'posts'], function(){
        Route::get('/index' , 'PostController@index')->name('posts.index');
        Route::get('/create' , 'PostController@create')->name('posts.create');
        Route::post('/store' , 'PostController@store')->name('posts.store');
        Route::get('/get-data' , 'PostController@getData')->name('posts.getdata');
        Route::get('/edit/{id?}' , 'PostController@edit')->name('posts.edit');
        Route::put('/update/{id}' , 'PostController@update')->name('posts.update');
        Route::delete('/destroy/{id}' , 'PostController@destroy')->name('posts.destroy');
    });

    // Quản lý Images
      Route::group(['prefix' => 'images'], function(){
        Route::get('/index' , 'ImagesController@index')->name('images.index');
      });
});







Route::group([
    'namespace' => 'frontend'
], function (){
    // Trang Home - Trang chủ
      Route::get('/' , 'HomeController@index')->name('home');

      Route::get('/cart/cart', 'CartController@index')->name('cart.cart');
      Route::get('/cart/add/{id}', 'CartController@add')->name('cart.add');
      Route::get('/cart/remove/{id}', 'CartController@add')->name('cart.remove');

      // Route::get('/products/index', 'ProductController@index')->name('frontend.products.index');
      Route::get('/product/single', 'ProductController@index')->name('product.single');

    // Trang sản phẩm
    // Route::group(['prefix' => 'products'], function(){
    //   // Route::get('/archive' , 'ProductController@index')->name('products.archive');
    //   // Route::get('/create' , 'ProductController@create')->name('products.create');
    // });




    // Trang tin tức
    //   Route::group(['prefix' => 'users'], function(){
    //   Route::get('/index' , 'UserController@index')->name('users.index');
    //   Route::get('/create' , 'UserController@create')->name('users.create');
    //   Route::post('/store' , 'UserController@store')->name('users.store');
    // });



    // Trang giỏ hàng
    // Route::group(['prefix' => 'categories'], function(){
    //   Route::get('/index' , 'CategoryController@index')->name('categories.index');
    //   Route::get('/create' , 'CategoryController@create')->name('categories.create');
    //   Route::post('/store' , 'CategoryController@store')->name('categories.store');
    // });

});