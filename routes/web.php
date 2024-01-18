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

Route::get('/codigo-postal/{zipcode}', [App\Http\Controllers\SchoolController::class, 'show'])->name('getShools.show');



Route::get('/posts', PostController::class .'@index')->name('posts.index');
// returns the form for adding a post
Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
// adds a post to the database
Route::post('/posts', PostController::class .'@store')->name('posts.store');
// returns a page that shows a full post
Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
// updates a post
Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
// deletes a post
Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');