<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', PostController::class .'@welcome')->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/getShools', [App\Http\Controllers\SchoolController::class, 'getShools'])->name('getShools');

Route::get('/prices', [App\Http\Controllers\PricesController::class, 'index'])->name('prices');
Route::post('/getdatatabledata', [App\Http\Controllers\PricesController::class, 'getDataTableData'])->name('getDataTableData');
Route::post('/getPriceData', [App\Http\Controllers\PricesController::class, 'getPriceData'])->name('getPriceData');
Route::post('/updatePrices', [App\Http\Controllers\PricesController::class, 'updatePrices'])->name('updatePrices');
Route::post('/addPrices', [App\Http\Controllers\PricesController::class, 'addPrices'])->name('addPrices');
Route::post('/deletePrice', [App\Http\Controllers\PricesController::class, 'deletePrice'])->name('deletePrice');
Route::post('/import', [App\Http\Controllers\PricesController::class, 'import'])->name('import');

Route::get('/codigo-postal/{zipcode}', [App\Http\Controllers\SchoolController::class, 'show'])->name('getShools.show');
Route::post('/', [App\Http\Controllers\SchoolController::class, 'sendEmail'])->name('sendEmail');


Route::get('/blogs', PostController::class .'@index')->name('blogs.index');
// returns the form for adding a post
Route::get('/blogs/create', PostController::class . '@create')->name('blogs.create');
// adds a post to the database
Route::post('/blogs', PostController::class .'@store')->name('blogs.store');
// returns a page that shows a full post
Route::get('/blogs/{post}', PostController::class .'@show')->name('blogs.show');
// returns the form for editing a post
Route::get('/blogs/{post}/edit', PostController::class .'@edit')->name('blogs.edit');
// updates a post
Route::put('/blogs/{post}', PostController::class .'@update')->name('blogs.update');
// deletes a post
Route::delete('/blogs/{post}', PostController::class .'@destroy')->name('blogs.destroy');

