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
// Route::middleware('role:admin')->group(function () { 
Route::get('dashboard','BackendController@dashboard')->name('dashboardpage');
Route::resource('producttypes','ProductTypeController');
Route::resource('packagingtypes','PackagingTypeController');
Route::resource('orders','OrderController');
Route::resource('weights','WeightController');
Route::get('clientsdetail','BackendController@clientsdetail')->name('clientsdetailpage');
Route::get('deliverydetail','BackendController@deliverydetail')->name('deliverydetailpage');
// });

//delivery-men 
// Route::middleware('role:delivery_man')->group(function () {
Route::resource('delivery', 'DeliveryManController');
Route::get('accountpage', 'DeliveryManController@accountpage')->name('accountpage');
Route::get('/deliveryman/accountdetail', 'DeliveryManController@accountdetail')->name('delivery.accountdetail');
Route::get('orderdetail', 'DeliveryManController@orderdetail')->name('orderdetail');
Route::resource('demo', 'DemoController');
Route::resource('client', 'ClientController');
// });


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


//.........................Customer View...............................
// Route::middleware('role:client')->group(function () { 
Route::get('main', 'CustomerController@main')->name('mainpage');
Route::get('about', 'CustomerController@about')->name('aboutpage');
Route::get('orderinformation', 'CustomerController@orderinformation')->name('orderinformationpage');
Route::get('orderdetailhistory', 'CustomerController@orderdetailhistory')->name('orderdetailhistorypage');
Route::get('customerlogin', 'CustomerController@customerlogin')->name('customerloginpage');
Route::get('customerregister', 'CustomerController@customerregister')->name('customerregisterpage');
Route::post('weight', 'CustomerController@weight')->name('weight');
Route::post('create', 'CustomerController@store')->name('createorder');
// });





