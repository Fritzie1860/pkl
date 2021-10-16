<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TosController;
use App\Models\tos1footplat;
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
Route::get('/profil', [UserController::class, 'profil']);
Route::view('/p','profil');


Route::get('/', [AuthController::class,'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);


Route::get('/projects', [ProjectController::class, 'index']);
Route::post('/inputProject', [ProjectController::class, 'store']);
Route::post('/editProject', [ProjectController::class, 'update']);
Route::get('/hapusProject/{id}', [ProjectController::class, 'hapus']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');

Route::get("/target",[TosController::class,'index']);
Route::post('tos11', [TosController::class,'in_tos11']);
Route::post('tos12', [TosController::class,'in_tos12']);
Route::post('tos13', [TosController::class,'in_tos13']);
Route::post('tos14', [TosController::class,'in_tos14']);


