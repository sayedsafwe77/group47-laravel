<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use  App\Models\User;
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

Route::get('/',  [UserController::class, 'getAll']);
Route::get('/user', [UserController::class, 'getAll'])->name('getuser');


Route::get('/create',[UserController::class,'create']);

Route::get('/select/{id}',[UserController::class,'select']);

Route::get('/delete/{id}',[UserController::class,'delete'])->name('user.delete');
