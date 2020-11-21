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

// Route::get('/', function () {
//     return view('welcome');
// });
#-------------------------------WEBSITE------------------------------#
Route::get('/','WebsiteController@index');
#-------------------------------WEBSITE------------------------------#

#---------------------------------ADMIN LOGIN / LOGOUT ------------------------------#
Route::get('/apanel','AdminController@index');
Route::post('/loginProcess','AdminController@accessPermission');
Route::get('adminDashboard','AdminController@adminDashboard');
Route::get('adminLogout','AdminController@adminLogout');
// Accountant Dashboard & Logout
Route::get('accountantDashboard','AdminController@accountantDashboard');
Route::get('accountantLogout','AdminController@accountantLogout');
// Moderator Dashboard & Logout
Route::get('moderatorDashboard','AdminController@moderatorDashboard');
Route::get('moderatorLogout','AdminController@moderatorLogout');
#---------------------------------ADMIN LOGIN / LOGOUT ------------------------------#
Route::get('insert','AdminController@insert');
Route::get('view','AdminController@view');
#--------------------------------------DEVICE TYPE---------------------------------------#
Route::get('addDeviceType','DeviceController@addDeviceType');
Route::post('addDeviceTypeInfo','DeviceController@addDeviceTypeInfo');
Route::get('manageDeviceType','DeviceController@manageDeviceType');
#--------------------------------------DEVICE TYPE---------------------------------------#
#----------------------------------------DEVICE------------------------------------------#
Route::get('addDevice','DeviceController@addDevice');
Route::post('addDeviceInfo','DeviceController@addDeviceInfo');
Route::get('manageDevice','DeviceController@manageDevice');
Route::get('viewDevice','DeviceController@viewDevice');
Route::get('viewDeviceBySerialNo/{serial_no}','DeviceController@viewDeviceBySerialNo');

#----------------------------------------DEVICE------------------------------------------#