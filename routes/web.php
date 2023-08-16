<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/products', [ProductsController::class, 'index']);

// Route::get('/products/{id}', 
// [ProductsController::class, 'show'])->where(
//     'id', '[0-9]+');

// Route::get('/products/{name}/{id}', 
// [ProductsController::class, 'show'])->where([
//     'name'=> '[a-z]+',
//     'id' => '[0-9]+'
//     ]
// );

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);
