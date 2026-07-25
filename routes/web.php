<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Manajemen siswa
Route::name('students.')->prefix('students')->group(function() {

    //halaman daftar siswa
    Route::get('/', [StudentController::class, 'index'])->name('index');

    //halaman detail siswa
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');

    //halaman tambah siswa
    Route::get('/create', [StudentController::class, 'create'])->name('create');

    //halaman edit siswa
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');

    //logika tambah siswa
    Route::post('/', [StudentController::class, 'store'])->name('store');

    //logika edit siswa
    Route::put('/{id}', [StudentController::class, 'update'])->name('update');

    //logika hapus siswa
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});

// Manajemen teacher
Route::name('teachers.')->prefix('teachers')->group(function() {

    //halaman daftar teacher
    Route::get('/', [TeacherController::class, 'index'])->name('index');

    //halaman detail teacher
    Route::get('/{id}', [TeacherController::class, 'show'])->name('show');

    //halaman tambah teacher
    Route::get('/create', [TeacherController::class, 'create'])->name('create');

    //halaman edit teacher
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');

    //logika tambah teacher
    Route::post('/', [TeacherController::class, 'store'])->name('store');

    //logika edit teacher
    Route::put('/{id}', [TeacherController::class, 'update'])->name('update');

    //logika hapus teacher
    Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');
});


