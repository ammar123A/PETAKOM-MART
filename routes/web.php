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
    return view('welcome');
});

Route::get('/Add', function () {
    return view('/Manage_Inventory.Admin_AddInventory');
});

Route::get('/datainventory', 'App\Http\Controllers\InventoryController@index');

Route::post('/datainventory/create', 'App\Http\Controllers\InventoryController@create');

Route::get('/datainventory/{id}/edit', 'App\Http\Controllers\InventoryController@edit');

Route::post('/datainventory/{id}/update', 'App\Http\Controllers\InventoryController@update');

Route::get('/datainventory/{id}/delete', 'App\Http\Controllers\InventoryController@delete');