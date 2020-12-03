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

Route::get('/', function () {
    return view('welcome');
});

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
      Route::get('/create' , 'CategoryController@create')->name('categories.create');
      Route::post('/store' , 'CategoryController@store')->name('categories.store');
      Route::get('/edit/{categories}' , 'CategoryController@edit')->name('categories.edit');
      Route::put('/update/{categories}' , 'CategoryController@update')->name('categories.update');
      Route::delete('/destroy/{categories}' , 'CategoryController@destroy')->name('categories.destroy');
      Route::get('/get-data' , 'CategoryController@getData')->name('categories.getdata');
    });




    // Quản lý thương hiệu
      Route::group(['prefix' => 'trademarks'], function(){
        Route::get('/index' , 'TrademarkController@index')->name('trademarks.index');
        Route::get('/create' , 'TrademarkController@create')->name('trademarks.create');
        Route::post('/store' , 'TrademarkController@store')->name('trademarks.store');
        Route::get('/edit/{trademark}' , 'TrademarkController@edit')->name('trademarks.edit');
        Route::put('/update/{trademark}' , 'TrademarkController@update')->name('trademarks.update');
        Route::delete('/destroy/{trademark}' , 'TrademarkController@destroy')->name('trademarks.destroy');
    });


    // Quản lý bài viết
      Route::group(['prefix' => 'news'], function(){
        Route::get('/index' , 'NewController@index')->name('news.index');
        Route::get('/create' , 'NewController@create')->name('news.create');
        Route::post('/store' , 'NewController@store')->name('news.store');
        Route::get('/edit/{new}' , 'NewController@edit')->name('news.edit');
        Route::put('/update/{new}' , 'NewController@update')->name('news.update');
        Route::delete('/destroy/{new}' , 'NewController@destroy')->name('news.destroy');
    });

    // // Quản lý chuyên mục
    //   Route::group(['prefix' => 'category'], function(){
    //     Route::get('/index' , 'TrademarkController@index')->name('category.index');
    //     Route::get('/create' , 'TrademarkController@create')->name('category.create');
    //     Route::post('/store' , 'TrademarkController@store')->name('category.store');
    //     Route::get('/edit/{category}' , 'TrademarkController@edit')->name('category.edit');
    //     Route::put('/update/{category}' , 'TrademarkController@update')->name('category.update');
    //     Route::delete('/destroy/{category}' , 'TrademarkController@destroy')->name('category.destroy');
    // });

    // Quản lý thương hiệu
      Route::group(['prefix' => 'images'], function(){
        Route::get('/index' , 'ImagesController@index')->name('images.index');
      });
});







Route::group([
    'namespace' => 'frontend',
    'prefix' => ''
], function (){
    // Trang Home - Trang chủ
      Route::get('/home' , 'HomeController@index')->name('home');

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