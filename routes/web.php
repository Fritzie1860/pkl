<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TosController;
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

// Route::get('/', [AuthController::class,'showFormLogin'])->name('login');
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/users', [UserController::class, 'index']);
Route::post('/inputuser', [UserController::class, 'store']);
Route::post('/edituser', [UserController::class, 'update']);
Route::get('/hapususer/{id}', [UserController::class, 'hapus']);
Route::get('/profil', [UserController::class, 'profil']);

Route::get('/projects', [ProjectController::class, 'index']);
    Route::post('/inputProject', [ProjectController::class, 'store']);
    Route::post('/editProject', [ProjectController::class, 'update']);
    Route::get('/hapusProject/{id}', [ProjectController::class, 'hapus']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');

    Route::get("/target", [TosController::class, 'index']);
    Route::post('tos11', [TosController::class, 'in_tos11']);
    Route::post('tos11_edit', [TosController::class, 'edit_tos11']);
    Route::get('tos11_del/{id}', [TosController::class, 'del_tos11']);

    Route::post('tos12', [TosController::class, 'in_tos12']);
    Route::post('tos12_edit', [TosController::class, 'edit_tos12']);
    Route::get('tos12_del/{id}', [TosController::class, 'del_tos12']);

    Route::post('tos13', [TosController::class, 'in_tos13']);
    Route::post('tos13_edit', [TosController::class, 'edit_tos13']);
    Route::get('tos13_del/{id}', [TosController::class, 'del_tos13']);

    Route::post('tos14', [TosController::class, 'in_tos14']);
    Route::post('tos14_edit', [TosController::class, 'edit_tos14']);
    Route::get('tos14_del/{id}', [TosController::class, 'del_tos14']);

    Route::post('tos24', [TosController::class, 'in_tos24']);
    Route::post('tos24_edit', [TosController::class, 'edit_tos24']);
    Route::get('tos24_del/{id}', [TosController::class, 'del_tos24']);

    Route::post('tos25', [TosController::class, 'in_tos25']);
    Route::post('tos25_edit', [TosController::class, 'edit_tos25']);
    Route::get('tos25_del/{id}', [TosController::class, 'del_tos25']);

    Route::post('tos26', [TosController::class, 'in_tos26']);
    Route::post('tos26_edit', [TosController::class, 'edit_tos26']);
    Route::get('tos26_del/{id}', [TosController::class, 'del_tos26']);

    Route::post('tos21', [TosController::class, 'in_tos21']);
    Route::post('tos21_edit', [TosController::class, 'edit_tos21']);
    Route::get('tos21_del/{id}', [TosController::class, 'del_tos21']);

    Route::post('tos22', [TosController::class, 'in_tos22']);
    Route::post('tos22_edit', [TosController::class, 'edit_tos22']);
    Route::get('tos22_del/{id}', [TosController::class, 'del_tos22']);

Route::group(['middleware' => 'auth'], function () {
   
    

    
});
