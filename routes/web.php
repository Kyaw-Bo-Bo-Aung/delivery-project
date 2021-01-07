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

Route::resource('/', 'DemoController');

// backend
Route::middleware('role:admin')->group(function () { 
Route::get('dashboard','BackendController@dashboard')->name('dashboardpage');
Route::resource('producttypes','ProductTypeController');
Route::resource('packagingtypes','PackagingTypeController');
Route::resource('orders','OrderController');
Route::post('/order/search','OrderController@search')->name('ordersearch');
Route::post('/order/detail','OrderController@detail')->name('orderdetail');
Route::resource('weights','WeightController');
Route::post('/order/assign/{id}/{order}','OrderController@assign')->name('orderassign');


Route::get('clientsdetail','BackendController@clientsdetail')->name('clientsdetailpage');

Route::get('deliverydetail','BackendController@deliverydetail')->name('deliverydetailpage');
});




//delivery-men 
Route::middleware('role:delivery_man')->group(function () {

Route::get('accountpage', 'DeliveryManController@accountpage')->name('accountpage');
Route::get('/accountpage/confirm/{id}/{order}', 'DeliveryManController@confirm')->name('orderconfirm');
Route::get('/accountpage/pickup/{id}/{order}', 'DeliveryManController@pickup')->name('orderpickup');
Route::get('/accountpage/delivered/{id}/{order}', 'DeliveryManController@delivered')->name('orderdelivered');
Route::get('/accountpage/cancel/{id}/{order}', 'DeliveryManController@cancel')->name('ordercancel');
Route::get('/deliveryman/accountdetail', 'DeliveryManController@accountdetail')->name('delivery.accountdetail');
Route::get('orderdetail', 'DeliveryManController@orderdetail')->name('orderdetail');
});

Route::resource('client', 'ClientController');

Route::resource('delivery', 'DeliveryManController');




Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


//.........................Customer View...............................
Route::middleware('role:client')->group(function () { 
Route::get('main', 'CustomerController@main')->name('mainpage');

Route::get('orderinformation', 'CustomerController@orderinformation')->name('orderinformationpage');
Route::get('orderdetailhistory/{id}', 'CustomerController@orderdetailhistory')->name('orderdetailhistorypage');

Route::post('weight', 'CustomerController@weight')->name('weight');
Route::post('create', 'CustomerController@store')->name('createorder');
});

Route::get('customerlogin', 'CustomerController@customerlogin')->name('customerloginpage');
Route::get('customerregister', 'CustomerController@customerregister')->name('customerregisterpage');
Route::get('about', 'CustomerController@about')->name('aboutpage');





