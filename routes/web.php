<?php

use App\Http\Controllers\AdminController;
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



Route::prefix('admin')->group(callback: function () {
    Route::view('/', 'admin.login')->name("admin.login");
    Route::post('/auth', [AdminController::class,'auth'])->name('admin.auth');

    Route::middleware(['adminAuth'])->group(function () {
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::view('profile','admin.profile')->name('admin.profile');
        Route::post('profile',[AdminController::class, 'update_password'])->name('admin.password.update');

//        Foreign books routes
        Route::get('foreign', [AdminController::class, 'foreign'])->name('admin.foreign');
        Route::post('foreign-upload', [AdminController::class, 'foreign_upload'])->name('admin.foreign.upload');
        Route::post('foreign-delete', [AdminController::class, 'foreign_delete'])->name('admin.foreign.delete');
        Route::get('foreign-download/{id}', [AdminController::class, 'foreign_download'])->name('admin.foreign.download');

//        School books routes
        Route::get('school', [AdminController::class, 'school'])->name('admin.school');
        Route::post('school-upload', [AdminController::class, 'school_upload'])->name('admin.school.upload');
        Route::post('school-delete', [AdminController::class, 'school_delete'])->name('admin.school.delete');

//        Academic books routes
        Route::get('academic', [AdminController::class, 'academic'])->name('admin.academic');
        Route::post('academic-upload', [AdminController::class, 'academic_upload'])->name('admin.academic.upload');
        Route::post('academic-delete', [AdminController::class, 'academic_delete'])->name('admin.academic.delete');

//        Presentation books routes
        Route::get('presentation', [AdminController::class, 'presentation'])->name('admin.presentation');
        Route::post('presentation-upload', [AdminController::class, 'presentation_upload'])->name('admin.presentation.upload');
        Route::post('presentation-delete', [AdminController::class, 'presentation_delete'])->name('admin.presentation.delete');

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

//        Route Test
        Route::get('block', [AdminController::class, 'block'])->name('admin.block');
        Route::get('admin-block-view/{id}', [AdminController::class, 'block_view'])->name('admin.block.view');
        Route::post('block-delete', [AdminController::class, 'delete_block'])->name('admin.block.delete');
        Route::post('block-upload', [AdminController::class, 'upload_block'])->name('admin.block.upload');
        Route::post('quiz-upload', [AdminController::class, 'upload_quiz'])->name('admin.quiz.upload');
        Route::post('quiz-delete', [AdminController::class, 'delete_quiz'])->name('admin.quiz.delete');

    });
});

Route::get('/',[UserController::class, 'home'])->name('user.home');

Route::get('user-presentation',[UserController::class, 'presentation'])->name('user.presentation');
Route::get('presentation-download/{id}', [AdminController::class, 'presentation_download'])->name('admin.presentation.download');

Route::get('user-school',[UserController::class, 'school'])->name('user.school');
Route::get('school-download/{id}', [AdminController::class, 'school_download'])->name('admin.school.download');

Route::get('user-academic',[UserController::class, 'academic'])->name('user.academic');
Route::get('academic-download/{id}', [AdminController::class, 'academic_download'])->name('admin.academic.download');


Route::get('test/{id}',[UserController::class, 'test'])->name('user.test');
Route::post('test-check',[UserController::class, 'check'])->name('user.test.check');
Route::view('a','user.home')->name('user.home2');
Route::view('about','user.about')->name('user.about');



