<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FileUploadTempController;
use App\Http\Controllers\RumahController;
use App\Http\Middleware\Authenticate;
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
    return view('welcome');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register',[AuthController::class, 'register'])->name('register');
Route::post('login/process', [AuthController::class, 'login_process'])->name('login.process');
Route::post('register/process', [AuthController::class, 'register_process'])->name('register.process');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => Authenticate::class], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    //Route Rumah
    Route::group(['prefix'=>'rumah','as'=>'rumah.'],function(){
        Route::get('/',[RumahController::class,'index'])->name('index');
        Route::get('add',[RumahController::class, 'tambah_data'])->name('tambah_data');
        Route::post('add/process',[RumahController::class, 'add_process'])->name('add_process');

        Route::get('edit/{id}',[RumahController::class, 'edit'])->name('edit');
        Route::post('update/{id}',[RumahController::class, 'update'])->name('update');

        Route::get('delete/{id}',[RumahController::class, 'delete'])->name('delete');
    });
});
Route::post('temp/file/upload',[FileUploadTempController::class,'temp_upload'])->name('temp-upload');
Route::get('temp/file/delete/{filename?}',[FileUploadTempController::class,'temp_delete'])->name('temp_delete');