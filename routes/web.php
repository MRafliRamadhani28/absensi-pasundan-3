<?php

use App\Http\Controllers\Cms\AbsenController;
use App\Http\Controllers\Cms\RiwayatAbsenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cms\UserController;
use App\Http\Controllers\Cms\UserLevelController;
use Illuminate\Support\Facades\Auth;

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

require __DIR__.'/auth.php';

Route::get('/', function () {
    echo "Hello";
});

Route::middleware('auth:user')->group(function () {
    Route::get('/dashboard', [AbsenController::class, 'index'])->name('dashboard');
    Route::post('/absen', [AbsenController::class, 'absen'])->name('absen');
    Route::post('/absenKeluar', [AbsenController::class, 'absenKeluar'])->name('absenKeluar');
});

Route::middleware('auth:web')->group(function () {
    Route::get('/cms/dashboard', function () {
        return view('cms.dashboard');
    })->name('cmsDashboard')->middleware(['cms.access:dashboard,hak-akses']);
    
    Route::get('/cms/user-level', [UserLevelController::class, 'index'])->name('cmsUserLevel');
    Route::post('/cms/user-level', [UserLevelController::class, 'store']);
    Route::get('/cms/user-level/{id}', [UserLevelController::class, 'detail']);
    Route::put('/cms/user-level/{id}', [UserLevelController::class, 'update']);
    Route::delete('/cms/user-level/{id}', [UserLevelController::class, 'delete']);
    Route::get('/cms/user-level/{id}/setting', [UserLevelController::class, 'setting'])->name('cmsUserLevel.setting');
    Route::post('/cms/user-level/{id}/setting', [UserLevelController::class, 'updateSetting']);

    Route::get('/cms/user', [UserController::class, 'index'])->name('cmsUser');
    Route::post('/cms/user', [UserController::class, 'store']);
    Route::get('/cms/user/{id}', [UserController::class, 'detail']);
    Route::put('/cms/user/{id}', [UserController::class, 'update']);
    Route::put('/cms/user/{id}/update-active', [UserController::class, 'updateActive']);
    Route::delete('/cms/user/{id}', [UserController::class, 'delete']);

    Route::get('/cms/absensi', [RiwayatAbsenController::class, 'index'])->name('absensi');
    Route::post('/cms/absensi', [RiwayatAbsenController::class, 'store']);
});
