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
//     return view('home');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FlowerController@home');
Route::get('/product/{id}','FlowerController@product');//product page
Route::get('/detail/{id}','FlowerController@detail');//detail page
Route::get('/search/{id}','FlowerController@search');//search page

//Admin
Route::group(['middleware' => ['admin','auth']], function () {
    Route::get('/admin', function(){
        return view('admin');
    });
    
    Route::get('/update/{id}','FlowerController@update');//update page
    Route::post('/update/{id}','FlowerController@edit');//edit
    Route::get('/delete/{id}','FlowerController@delete');//delete page
    Route::get('/delete-category/{id}','FlowerController@deletecategory');//delete page
    Route::get('/update-category/{id}','FlowerController@updatecategory');//delete page
    Route::get('/add','FlowerController@add');//add pages
    Route::post('/addproduct','FlowerController@addproduct');//add pages
    Route::post('/admin','FlowerController@admin');//admin pages
    Route::post('/editcategory/{id}','FlowerController@editCategory');//admin pages
});

//Customer
Route::group(['middleware' => ['auth']], function () {
    Route::post('/mycart','FlowerController@cart');//My Cart
    
    Route::get('/change','FlowerController@change');//change password page
    Route::post('/change-password','FlowerController@changePassword');//change password function
        
    Route::post('/addtocart/{id}','FlowerController@addtocart');//addtocart
    Route::get('/mycart','FlowerController@mycart');//My Cart page
    Route::post('/update-cart/{id}','FlowerController@updateCart');//My Cart page
    Route::get('/checkout','FlowerController@checkout');//My Cart page
    Route::get('/transaction','FlowerController@transaction');//Transaction history page
    Route::get('/transaction-detail/{id}','FlowerController@transactionDetail');//Transaction detail history page
});
