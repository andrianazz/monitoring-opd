<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\SubtaskController;
use App\Http\Controllers\GovernmentController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;

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

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/auth', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Middleware
Route::group(['middleware' => 'auth'], function () {

    //Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


    // OPD
    Route::get('/government', [GovernmentController::class, 'index'])->name('government');
    Route::get('/government/add', [GovernmentController::class, 'add'])->name('add_government');
    Route::post('/government/insert', [GovernmentController::class, 'insert'])->name('insert_government');
    Route::get('/government/{id}/edit', [GovernmentController::class, 'edit'])->name('edit_government');
    Route::put('/government/{id}', [GovernmentController::class, 'update'])->name('update_government');
    Route::delete('/government/{id}/delete', [GovernmentController::class, 'destroy'])->name('destroy_government');


    //PEGAWAI
    Route::get('/officer', [OfficerController::class, 'index'])->name('officer');
    Route::get('/officer/add', [OfficerController::class, 'add'])->name('add_officer');
    Route::post('/officer/insert', [OfficerController::class, 'insert'])->name('insert_officer');
    Route::get('/officer/{id}/edit', [OfficerController::class, 'edit'])->name('edit_officer');
    Route::put('/officer/{id}', [OfficerController::class, 'update'])->name('update_officer');
    Route::delete('/officer/{id}/delete', [OfficerController::class, 'destroy'])->name('destroy_officer');
    Route::get('/officer/{id}/edit-password', [OfficerController::class, 'editPassword'])->name('edit_password_officer');
    Route::put('/officer/{id}/updatePassword', [OfficerController::class, 'updatePassword'])->name('update_password_officer');
    Route::put('/officer/{id}/update-photo', [OfficerController::class, 'updatePhoto'])->name('update_photo_officer');


    // AKUN
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/edit', [AdminController::class, 'edit'])->name('edit_admin');
    Route::put('/admin/update', [AdminController::class, 'update'])->name('update_admin');
    Route::get('/admin/edit-password', [AdminController::class, 'editPassword'])->name('edit_password_admin');
    Route::put('/admin/updatePassword', [AdminController::class, 'updatePassword'])->name('update_password_admin');
    Route::put('admin/update-photo', [AdminController::class, 'updatePhoto'])->name('update_photo_admin');



    //KEGIATAN
    Route::get('/task/{month}', [TaskController::class, 'index'])->name('task');
    Route::get('/task/{id}/show/{month}', [TaskController::class, 'show'])->name('show_task');
    Route::post('/task/insert', [TaskController::class, 'insert'])->name('insert_task');
    Route::get('/task/{id}/edit/{govern}', [TaskController::class, 'edit'])->name('edit_task');
    Route::put('/task/{id}', [TaskController::class, 'update'])->name('update_task');
    Route::delete('/task/{id}/delete', [TaskController::class, 'destroy'])->name('destroy_task');


    //SUBKEGIATAN
    Route::get('/task/{id}/subtask', [SubtaskController::class, 'show'])->name('subtask');
    Route::post('/subtask/insert', [SubtaskController::class, 'insert'])->name('insert_subtask');
    Route::get('/subtask/{id}/edit/{task}', [SubtaskController::class, 'edit'])->name('edit_subtask');
    Route::put('/subtask/{id}', [SubtaskController::class, 'update'])->name('update_subtask');
    Route::delete('/subtask/{id}/delete', [SubtaskController::class, 'destroy'])->name('destroy_subtask');


    // Dokumentasi
    Route::get('/subtask/{id}/upload', [PhotoController::class, 'index'])->name('upload');
    Route::post('/add-photo/{id}', [PhotoController::class, 'insert'])->name('insert_subtask');
    Route::delete('/delete-photo/{id}', [PhotoController::class, 'delete'])->name('delete_subtask');
});

//Laporan
Route::get('laporan/{id}/{month}', [LaporanController::class, 'laporanOPD'])->name('laporan_opd');
Route::get('laporan/{id}/pdf', [LaporanController::class, 'laporanOPDpdf'])->name('laporan_opd_pdf');
Route::get('laporanDokumentasi/{id}', [LaporanController::class, 'laporanDokumentasi'])->name('laporan_dokumentasi');
