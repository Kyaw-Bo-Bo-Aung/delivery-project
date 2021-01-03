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
Route::get('clientsdetail','BackendController@clientsdetail')->name('clientsdetailpage');
Route::get('deliverydetail','BackendController@deliverydetail')->name('deliverydetailpage');

//delivery-men frontend
Route::resource('delivery', 'DeliveryManController');
Route::resource('client', 'ClientController');



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


//.........................Customer View............................... 
Route::get('main', 'CustomerController@main')->name('mainpage');
Route::get('about', 'CustomerController@about')->name('aboutpage');
Route::get('orderinformation', 'CustomerController@orderinformation')->name('orderinformationpage');
Route::get('orderdetailhistory', 'CustomerController@orderdetailhistory')->name('orderdetailhistorypage');
Route::get('customerlogin', 'CustomerController@customerlogin')->name('customerloginpage');
Route::get('customerregister', 'CustomerController@customerregister')->name('customerregisterpage');




