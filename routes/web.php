<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Manajemen siswa
Route::name('students.')->prefix('students')->group(function() {

    //halaman daftar siswa
    Route::get('/', [StudentController::class, 'index'])->name('index');

    //halaman tambah siswa
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    
    //halaman detail siswa
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');


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

// manajemen kelas
Route::name('schoolclasses.')->prefix('schoolclasses')->group(function() {
    //halaman daftar kelas
    Route::get('/', IndexController::class)->name('index');

    //halaman detail kelas
    Route::get('/{id}', ShowController::class)->name('show');

    //halaman tambah kelas
    Route::get('/create', CreateController::class)->name('create');

    //halaman edit kelas
    Route::get('/{id}/edit', EditController::class)->name('edit');

    //logika tambah kelas
    Route::post('/', StoreController::class)->name('store');

    //logika edit kelas
    Route::put('/{id}', UpdateController::class)->name('update');

    //logika hapus kelas
    Route::delete('/{id}', DestroyController::class)->name('destroy');
});

// manajemen pelajaran
Route::resource('classes', MajorController::class);
    



