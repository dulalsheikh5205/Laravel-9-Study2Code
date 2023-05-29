<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\weatherController;
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
Route::get('/home', function(){
    echo "Hello, World!";
});


// hasinHyder live laravel class-2

// Route::get('/books', [BookController::class,'books']);
// Route::get('/books/{id}', [BookController::class,'getBook']);
// Route::get('/books/{id}/{field}', [BookController::class,'getBookField']);

Route::controller(BookController::class)->group(function(){
    Route::get('/books', 'books');
    Route::get('/books/{id}', 'getBook');
    Route::get('/books/{id}/{field}','getBookField');

    Route::post('/books', 'createBook');

    Route::post('/header', 'getHeader');
});
// Route::get('/books/{id}', [BookController::class,'getBook'])->whereNumber('id');
// Route::get('/books/{id}/author', [BookController::class,'getBookAuthor']);
// Route::get('/books/{id}/title', [BookController::class,'getBook']);


// Route::get('/weather/{city}', [weatherController::class,'getWeather']);
// Route::get('/weather/{city?}', [weatherController::class,'getWeather']);
