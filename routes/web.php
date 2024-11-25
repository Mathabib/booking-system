<?php

use App\Http\Controllers\booking_controller;
use App\Http\Controllers\meeting_controller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [meeting_controller::class, 'index']);
Route::post('/bookings', [booking_controller::class, 'store'])->name('bookings.store');

