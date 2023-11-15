<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\DashboardController;


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
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/simpanregister',[LoginController::class,'simpanregister'])->name('simpanregister');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::group(['middleware' => ['auth', 'ceklevel:admin,editor']], function(){
    Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('/admin/manajemenuser',[UserController::class,'manajemenuser'])->middleware('auth', 'ceklevel:admin')->name('admin.manajemenuser');
    Route::get('/admin/createuser',[UserController::class,'createuser'])->middleware('auth', 'ceklevel:admin')->name('admin.createuser');
    Route::post('/admin/storeuser',[UserController::class,'storeuser'])->middleware('auth', 'ceklevel:admin')->name('admin.storeuser');
    Route::delete('/admin/destroyuser/{id}',[UserController::class,'destroyuser'])->middleware('auth', 'ceklevel:admin')->name('admin.destroyuser');
    Route::get('/admin/produk',[DashboardController::class,'produk'])->middleware('auth', 'ceklevel:editor,admin')->name('admin.produk');
});
