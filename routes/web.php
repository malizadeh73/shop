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

Route::get('/', 'User\HomeController@get');
Route::get('/login', 'User\LoginController@get');
Route::get('/checkout', 'User\CheckoutController@get');
Route::get('/complete', 'User\CompleteController@get');
Route::get('/contact', 'User\ContactController@get');
Route::get('/history', 'User\HistoryController@get');
Route::get('/products/{page_num}', 'User\ListProductController@get');
Route::get('/profile', 'User\ManageProfileController@get');
Route::get('/order-tracking', 'User\LoginController@get');
Route::get('/products/{title}', 'User\ProductDetailController@get');
Route::get('/twentyone', 'User\TwentyoneController@get');
Route::get('/wish', 'User\WishListController@get');

Route::group(['prefix' => 'admin'], function () {

    Route::get('home', 'Admin\HomeController@get');
    Route::post('post', 'Admin\HomeController@post');

    Route::get('product/list/{page_num}', 'Admin\ProductController@get');
    Route::get('product/new', 'Admin\ProductNewController@get');

    Route::post('product/post', 'Admin\productController@post');
    Route::post('product/new/post', 'Admin\ProductNewController@post');

    Route::get('category/list/{page_num}', 'Admin\CategoryController@get');
    Route::get('category/new', 'Admin\CategoryNewController@get');

    Route::post('category/post', 'Admin\CategoryController@post');
    Route::post('category/new/post', 'Admin\CategoryNewController@post');

//    Route::get('news/details', 'Admin\NewsDetailsController@get');

    Route::get('news/list/{page_num}', 'Admin\NewsController@get');
    Route::get('news/new', 'Admin\NewsNewController@get');
    Route::get('news/edit/{title}', 'Admin\NewsEditController@get');

    Route::post('news/new/post', 'Admin\NewsNewController@post');
    Route::post('news/edit/post', 'Admin\NewsEditController@post');
    Route::post('news/post', 'Admin\NewsController@post');


});