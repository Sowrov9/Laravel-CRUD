<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
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
    return view('pages.dashboard');
});

Route::get("/student/create",[StudentController::class,'create']);
Route::post("/student/store",[StudentController::class,'store']);
Route::get("/student",[StudentController::class,'index']);
Route::get("/student/edit/{id}",[StudentController::class,'edit']);


Route::resource('customer', CustomerController::class);
