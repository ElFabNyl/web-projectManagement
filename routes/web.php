<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route du user
Route::get('/dashboard', [UserController::class, 'dashoardUser'])->name('dashboard');
Route::get('/projets', [UserController::class, 'projetsUser'])->name('project');
Route::get('/notification', [UserController::class, 'notificationUser'])->name('notification');
Route::get('/new-projets', [UserController::class, 'newprojetsUser'])->name('new-projets');
Route::get('/invoice', [UserController::class, 'invoiceUser'])->name('invoices');
Route::get('/invoice-details', [UserController::class, 'detailsinvoiceUser'])->name('invoice-details');


// Register

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('store');
