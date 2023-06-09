<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Mainpage');
});

Route::get
('/add', function () {
    return view('Manage_Vendor.Admin_addvendorTable');
});

Route::post('/add/create','App\Http\Controllers\Vendor_Controller@create');

Route::get('/vendor/{id}/edit','App\Http\Controllers\Vendor_Controller@read');

Route::get('/vendor/{id}/delete/page','App\Http\Controllers\Vendor_Controller@readd');

Route::get('/vendor','App\Http\Controllers\Vendor_Controller@index');

Route::get('/vendor/{id}/delete','App\Http\Controllers\Vendor_Controller@destroy');



