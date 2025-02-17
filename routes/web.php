<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;
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
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("/student/create",[StudentController::class,'create'])->middleware("Manager");
Route::post("/student/store",[StudentController::class,'store'])->middleware("Manager");
Route::get("/student",[StudentController::class,'index'])->middleware("Manager");
Route::get("/student/edit/{id}",[StudentController::class,'edit'])->middleware("Manager");


Route::resource('customer', CustomerController::class);
// Route::resource('customer', CustomerController::class)->middleware("Admin");
require __DIR__.'/auth.php';
