<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/', [CustomersController::class, 'index']);
Route::resource('/customers', CustomersController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
