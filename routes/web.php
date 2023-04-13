<?php

use App\Http\Controllers\InterviewController;
use App\Http\Controllers\ResponController;
use App\Models\Interview;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [InterviewController::class, 'index'])->name('index');

Route::get('/login', [InterviewController::class, 'Log'])->name('login');

Route::post('/auth',[InterviewController::class, 'auth'])->name('login.auth');

Route::post('/create', [InterviewController::class, 'store'])->name('store.data');


Route::middleware('IsLogin', 'CekRole:admin')->group(function(){
    Route::get('/data-admin', [InterviewController::class, 'dataAdmin'])->name('data.admin');
    Route::delete('/delete/{id}', [InterviewController::class, 'destroy'])->name('delete');
    Route::get('/export/pdf', [InterviewController::class, 'createPDF'])->name('export.pdf');
    Route::get('/export-id/pdf/{id}', [InterviewController::class, 'PrintId'])->name('pdf.id');
    Route::get('/export/excel', [InterviewController::class,  'exportExcel'])->name('export.excel');
});

Route::get('/logout', [InterviewController::class, 'logout'])->name('logout');

Route::middleware('IsLogin', 'CekRole:petugas')->group(function(){
    Route::get('/data-petugas', [InterviewController::class, 'dataPetugas'])->name('data.petugas');
    Route::get('/respon/edit/{interview_id}', [ResponController::class, 'edit'])->name('respon.edit');
    Route::patch('/respon/update/{interview_id}', [ResponController::class, 'update'])->name('respon.update');
});


