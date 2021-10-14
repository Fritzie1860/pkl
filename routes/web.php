<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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

Route::get('/users', [UserController::class, 'index']);
Route::post('/inputuser', [UserController::class, 'store']);
Route::post('/edituser', [UserController::class, 'update']);
Route::get('/hapususer/{id}', [UserController::class, 'hapus']);
// Route::post('verif', [AuthController::class, 'verif']);
// Route::post('/login', [AuthController::class, 'login']);


Route::get('/', [AuthController::class,'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::view('/forgotpass', 'forgotpass');
Route::view('/sidebar', 'layout.sidebar');
Route::view('/header', 'layout.header');
Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware();
Route::view('/projects', 'projects');
Route::view('/tambah_project', 'tambah_project');
Route::view('/detil_project', 'detil_project');
Route::view('/profil', 'profil')->name('home');