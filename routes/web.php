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

// backend
Route::get('dashboard','BackendController@dashboard')->name('dashboardpage');
Route::resource('producttypes','ProductTypeController');
Route::resource('packagingtypes','PackagingTypeController');
Route::resource('orders','OrderController');
Route::resource('weights','WeightController');
Route::get('usersdetail','BackendController@usersdetail')->name('usersdetailpage');
Route::get('deliverydetail','BackendController@deliverydetail')->name('deliverydetailpage');

//delivery-men frontend
Route::resource('delivery', 'DeliveryManController');
Route::get('accountpage', 'DeliveryManController@accountpage')->name('accountpage');
Route::get('accountdetail', 'DeliveryManController@accountdetail')->name('accountdetail');
Route::get('orderdetail', 'DeliveryManController@orderdetail')->name('orderdetail');

Route::resource('demo', 'DemoController');

Route::resource('client', 'ClientController');



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
