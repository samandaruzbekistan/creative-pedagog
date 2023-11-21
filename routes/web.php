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



Route::prefix('admin')->group(callback: function () {
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

//        Presentation books routes
        Route::get('presentation', [AdminController::class, 'presentation'])->name('admin.presentation');
        Route::post('presentation-upload', [AdminController::class, 'presentation_upload'])->name('admin.presentation.upload');
        Route::post('presentation-delete', [AdminController::class, 'presentation_delete'])->name('admin.presentation.delete');
        Route::get('presentation-download/{id}', [AdminController::class, 'presentation_download'])->name('admin.presentation.download');

//        Topic routes
        Route::get('topic', [AdminController::class, 'topic'])->name('admin.topic');
        Route::post('ck/upload', [AdminController::class, 'imgUpload'])->name('imgUpload');
        Route::post('topic_upload-upload', [AdminController::class, 'topic_upload'])->name('admin.topic.upload');
        Route::post('update-topic', [AdminController::class, 'topic_update'])->name('admin.topic.update');
        Route::post('topic-delete', [AdminController::class, 'delete_topic'])->name('admin.topic.delete');
        Route::get('topic-edit/{id}', [AdminController::class, 'edit_topic'])->name('admin.topic.edit');

//        Route Rebus
        Route::get('rebus', [AdminController::class, 'rebus'])->name('admin.rebus');
        Route::post('rebus-delete', [AdminController::class, 'delete_rebus'])->name('admin.rebus.delete');
        Route::post('rebus-upload', [AdminController::class, 'rebus_upload'])->name('admin.rebus.upload');

    });
});

Route::view('/','user.home')->name('user.home');
Route::view('/about','user.about')->name('user.about');


