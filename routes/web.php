<?php

use App\Http\Controllers\AdminController;
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



Route::prefix('admin')->group(function () {
    Route::view('/', 'admin.login')->name("admin.login");
    Route::post('/auth', [AdminController::class,'auth'])->name('admin.auth');

    Route::middleware(['adminAuth'])->group(function () {
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('home', [AdminController::class, 'home'])->name('admin.home');

//        Foreign books routes
        Route::get('foreign', [AdminController::class, 'foreign'])->name('admin.foreign');
        Route::post('foreign-upload', [AdminController::class, 'foreign_upload'])->name('admin.foreign.upload');
        Route::post('foreign-delete', [AdminController::class, 'foreign_delete'])->name('admin.foreign.delete');
        Route::get('foreign-download/{id}', [AdminController::class, 'foreign_download'])->name('admin.foreign.download');

//        School books routes
        Route::get('school', [AdminController::class, 'school'])->name('admin.school');
        Route::post('school-upload', [AdminController::class, 'school_upload'])->name('admin.school.upload');
        Route::post('school-delete', [AdminController::class, 'school_delete'])->name('admin.school.delete');
        Route::get('school-download/{id}', [AdminController::class, 'school_download'])->name('admin.school.download');

//        Academic books routes
        Route::get('academic', [AdminController::class, 'academic'])->name('admin.academic');
        Route::post('academic-upload', [AdminController::class, 'academic_upload'])->name('admin.academic.upload');
        Route::post('academic-delete', [AdminController::class, 'academic_delete'])->name('admin.academic.delete');
        Route::get('academic-download/{id}', [AdminController::class, 'academic_download'])->name('admin.academic.download');
    });
});


