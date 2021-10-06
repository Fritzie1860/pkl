<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index']);
Route::get('/simpan', [UserController::class, 'store']);
Route::post('/cek', [UserController::class, 'cek']);


Route::view('/login', 'login');
Route::view('/forgotpass', 'forgotpass');
Route::view('/sidebar', 'layout.sidebar');
Route::view('/header', 'layout.header');
Route::view('/dashboard', 'dashboard');
Route::view('/projects', 'projects');
Route::view('/users', 'users');
Route::view('/tambah_project', 'tambah_project');
Route::view('/detil_project', 'detil_project');
Route::view('/profil', 'profil');