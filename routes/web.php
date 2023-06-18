<?php

use App\Http\Controllers\CashierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReportController;

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
Route::get('/report', function () {
    return view('Manage_sales.reportSales');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/calcu', [CashierController::class, 'index']);
Route::post('/calcu/create', [ReportController::class, 'create']);

Route::get('/sales', function () {
    return view('Manage_sales.AdminSalesMain');
});
Route::get('/edit', function () {
    return view('items.edit');
});
Route::get('/chartreport', function () {
    return view('items.sales-chart');
});
Route::get('/items/{id}/edit', 'ItemController@edit')->name('items.edit');

Route::post('/sales/create', [CashierController::class, 'create']);
Route::get('/sales/{id}/delete', [CashierController::class, 'delete']);

Route::get('/cashieropening', function () {
    return view('Manage_sales.CashierOpeningSalesReport');
});
Route::get('/cashierclosing', function () {
    return view('Manage_sales.CashierClosingSalesReport');
});

Route::post('saleClosing/create', [CashierController::class, 'createClosing']);
//  Route::get('/sales-chart', function () {
//      return view('items.sales-chart');
//  });
Route::view('items.sales-chart', 'sales-chart');
Route::get('/sales-chart', [ReportController::class, 'index'])->name('items.sales-chart');


Route::get('/cashier', function () {
    return view('Manage_sales.CashierOpeningSalesReport');
});

Route::get('/reportgraph', function () {
    return view('Manage_sales.AdminMartReportMain');
});
Route::get('/paymentvendors', function () {
    return view('Manage_sales.paymentVendors');
});
Route::get('/paymentmain', function () {
    return view('Manage_sales.paymentmain');
});
Route::get('/paymentcashier', function () {
    return view('Manage_sales.paymentCashier');
});
Route::get('/maincashier', function () {
    return view('Manage_sales.CashierMain');
});

