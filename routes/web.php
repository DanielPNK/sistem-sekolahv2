<?php

use App\Http\Controllers\StudentController;
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



