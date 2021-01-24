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

//Route::get('/','FrontendController@index')->name('frontend');


use App\Http\Controllers\Controller;

Route::get('demo', 'CController@demo');


Route::group(['prefix'=>'admin'],function (){

    //QL DANH MUC
    Route::get('/category/tim-kiem', 'CategoryController@search')->name('category.search');
    Route::resource('category', 'CategoryController');
    Route::get('category/{id}/delete','categoryController@destroy')->name('category.delete');

    //QL SAN PHAM
    Route::get('/product/tim-kiem', 'productController@search')->name('product.search');
    Route::resource('product', 'productController');
    Route::get('product/{id}/delete','productController@destroy')->name('product.delete');

    //QL BANNER
    Route::get('/banner/tim-kiem', 'bannerController@search')->name('banner.search');
    Route::resource('banner', 'bannerController');
    Route::get('banner/{id}/delete','bannerController@destroy')->name('banner.delete');

    //QL NEWS
    Route::get('/news/tim-kiem', 'newsController@search')->name('news.search');
    Route::resource('news', 'newsController');
    Route::get('news/{id}/delete','newsController@destroy')->name('news.delete');

    //QL PARTNER
    Route::get('/partner/tim-kiem', 'partnerController@search')->name('partner.search');
    Route::resource('partner', 'partnerController');
    Route::get('partner/{id}/delete','partnerController@destroy')->name('partner.delete');
});
Route::get('/', 'CController@index');
Route::get('/danh-muc/{slug}', 'CController@cateid')->name('shop.category');
Route::get('/san-pham/{id}', 'CController@productid')->name('shop.product_detail');
Route::get('/chi-tiet-tin-tuc/{slug}', 'CController@detail')->name('shop.detail');
Route::get('/tin-tuc/', 'CController@article')->name('shop.article');
Route::get('/doi-tac/', 'CController@partner')->name('shop.partner');
Route::get('/san-pham/', 'CController@product')->name('shop.product');
Route::get('/lien-he/', 'CController@contact')->name('shop.contact');
Route::get('/gioi-thieu/', 'CController@introduce')->name('shop.introduce');
