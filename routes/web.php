<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\ReportMasukController;
use App\Http\Controllers\ReportKeluarController;
use App\Http\Controllers\EditDataMasukController;
use App\Http\Controllers\EditDataKeluarController;
use App\Http\Controllers\TambahDataMasukController;
use App\Http\Controllers\TambahDataKeluarController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\PasswordController;
use App\Models\Surat_masuk;

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
    return view('/auth/login',[
        'title' => 'Login Page'
    ]);
} )->name('login');

Route::post('/auth/login', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/auth/registration', [RegistrationController::class,'index']);
Route::post('/auth/registration', [RegistrationController::class, 'save']);

Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('editprofile', [EditProfileController::class, 'index'])->name('editprofile');
    Route::get('/profile/edit', [EditProfileController::class, 'edit']);
    Route::post('/profile/update', [EditProfileController::class, 'update'])->name('update.profile');

    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    
    /* Route Surat Masuk */
    Route::name('suratmasuk.')->group(function () {
        Route::get('suratmasuk.index',[SuratMasukController::class, 'index'])->name('index.suratmasuk');
        Route::get('add', [SuratMasukController::class, 'add'])->name('add.suratmasuk');
        Route::post('create', [SuratMasukController::class, 'store'])->name('store.suratmasuk');
        Route::post('/suratmasuk/{id}/update', [SuratMasukController::class, 'update'])->name('update.suratmasuk');
        Route::get('/suratmasuk/{id}/edit', [SuratMasukController::class, 'edit'])->name('edit.suratmasuk');
        Route::delete('/suratmasuk/{id}/destroy', [SuratMasukController::class, 'destroy'])->name('destroy.suratmasuk');
        Route::get('/download/{id}',[SuratMasukController::class,'download'])->name('download.suratmasuk');
        
    });
    
    /* Route Report Page */
    Route::get('suratkeluar.index', [SuratKeluarController::class, 'index'])->name('index.suratkeluar');
    Route::prefix('suratkeluar')->group(function () {
        Route::name('suratkeluar.')->group(function () {
            Route::get('add', [SuratKeluarController::class, 'add'])->name('add.suratkeluar');
            Route::post('create', [SuratKeluarController::class, 'store'])->name('store.suratkeluar');
            Route::post('/suratkeluar/{id}/update', [SuratKeluarController::class, 'update'])->name('update.suratkeluar');
            Route::get('/suratkeluar/{id}/edit', [SuratKeluarController::class, 'edit'])->name('edit.suratkeluar');
            Route::delete('/suratkeluar/{id}/destroy', [SuratKeluarController::class, 'destroy'])->name('destroy.suratkeluar');
            Route::get('/download/{id}',[SuratKeluarController::class,'download'])->name('download.suratkeluar');
        });
    });

    Route::get('reportsuratmasuk', [ReportMasukController::class, 'index'])->name('reportmasuk');
    Route::get('reportsuratmasuk/export', [ReportMasukController::class, 'export'])->name('export.suratmasuk');
    
    Route::get('reportsuratkeluar', [ReportKeluarController::class, 'index'])->name('reportkeluar');
    Route::get('reportsuratkeluar/export', [ReportKeluarController::class, 'export'])->name('export.suratkeluar');
    
});