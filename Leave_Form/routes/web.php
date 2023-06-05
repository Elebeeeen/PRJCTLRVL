<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

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
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/leaveform', App\Http\Controllers\EmployeeController::class);

//print
Route::post("/printform/{id}", [App\Http\Controllers\PrintController::class, "printform"])->name("printform");

Route::resource('/humanresource', App\Http\Controllers\HRController::class);
Route::get('/leaveapplication', [App\Http\Controllers\HRController::class, 'index2'])->name('index2');
Route::get('/leavelist', [App\Http\Controllers\EmployeeController::class, 'leavelist']);

Auth::routes();
