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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/getShools', [App\Http\Controllers\SchoolController::class, 'getShools'])->name('getShools');

Route::get('/prices', [App\Http\Controllers\PricesController::class, 'index'])->name('prices');
Route::get('/getdatatabledata', [App\Http\Controllers\PricesController::class, 'getDataTableData'])->name('getDataTableData');
Route::post('/getPriceData', [App\Http\Controllers\PricesController::class, 'getPriceData'])->name('getPriceData');
Route::post('/updatePrices', [App\Http\Controllers\PricesController::class, 'updatePrices'])->name('updatePrices');
Route::post('/addPrices', [App\Http\Controllers\PricesController::class, 'addPrices'])->name('addPrices');
Route::post('/deletePrice', [App\Http\Controllers\PricesController::class, 'deletePrice'])->name('deletePrice');
