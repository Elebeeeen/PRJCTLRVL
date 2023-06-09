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
Route::post("/printformDC/{id}", [App\Http\Controllers\PrintController::class, "printformDC"])->name("printformDC");

//hr and employee
Route::resource('/humanresource', App\Http\Controllers\HRController::class);
Route::get('/leaveapplication', [App\Http\Controllers\HRController::class, 'index2'])->name('index2');
Route::get('/leaveApplicationDivisionChief', [App\Http\Controllers\HRController::class, 'index4']);
Route::get('/leavelist', [App\Http\Controllers\EmployeeController::class, 'leavelist']);

Route::get('/accountapplication', [App\Http\Controllers\HRController::class, 'index3'])->name('index3');
Route::get('/viewaccount/{id}', [App\Http\Controllers\HRController::class, 'show2'])->name('show2');
Route::get('/viewdivision/{id}', [App\Http\Controllers\HRController::class, 'show3']);
Route::put('/employeeHR/{id}', [App\Http\Controllers\HRController::class, 'update2']);

//division chief
Route::resource('/divisionchief', App\Http\Controllers\DCController::class);
Route::get('/divisionlist', [App\Http\Controllers\DCController::class, 'index2']);
Route::get('/divemplist', [App\Http\Controllers\DCController::class, 'index3']);
Route::get('/viewemplist/{id}', [App\Http\Controllers\DCController::class, 'show3']);

//Director
Route::resource('/director', App\Http\Controllers\DirController::class);
Route::get('/leaveapplicationDir', [App\Http\Controllers\DirController::class, 'index2']);
Route::get('/viewLeaveAppEmployee/{id}', [App\Http\Controllers\DirController::class, 'show']);
Route::put('/employeedirect/{id}', [App\Http\Controllers\DirController::class, 'update2']);

Route::get('/leaveApplicationDivisionChief1', [App\Http\Controllers\DirController::class, 'index3']);
Route::get('/viewLeaveAppDivision/{id}', [App\Http\Controllers\DirController::class, 'show2']);

//head hr
Route::resource('/headHR', App\Http\Controllers\HeadController::class);
Route::get('/leaveapplicationHead', [App\Http\Controllers\HeadController::class, 'index2']);
Route::get('/leaveapplicationHead1', [App\Http\Controllers\HeadController::class, 'index3']);

Route::get('/viewLeaveAppEmployeeHead/{id}', [App\Http\Controllers\HeadController::class, 'show']);
Route::get('/viewLeaveAppEmployeeHead1/{id}', [App\Http\Controllers\HeadController::class, 'show2']);
Route::put('/employeeHead/{id}', [App\Http\Controllers\HeadController::class, 'update2']);


Auth::routes();
