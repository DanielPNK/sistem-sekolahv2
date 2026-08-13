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

// student
Route::name('students.')->prefix('students')->group(function() {

    //index student
    Route::get('/', [StudentController::class, 'index'])->name('index');

    //create student
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    
    //show student
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');


    //edit student
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');

    //logika tambah siswa
    Route::post('/', [StudentController::class, 'store'])->name('store');

    //logika edit siswa
    Route::put('/{id}', [StudentController::class, 'update'])->name('update');

    //logika hapus siswa
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});

// teacher
Route::name('teachers.')->prefix('teachers')->group(function() {

    //index teacher
    Route::get('/', [TeacherController::class, 'index'])->name('index');

    //create teacher
    Route::get('/create', [TeacherController::class, 'create'])->name('create');

    //show teacher
    Route::get('/{id}', [TeacherController::class, 'show'])->name('show');

    //edit teacher
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');

    
    Route::post('/', [TeacherController::class, 'store'])->name('store');

    
    Route::put('/{id}', [TeacherController::class, 'update'])->name('update');

    
    Route::delete('/{id}', [TeacherController::class, 'destroy'])->name('destroy');
});

// school class
Route::name('classes.')->prefix('schoolclasses')->group(function() {
    // index classes
    Route::get('/', IndexController::class)->name('index');

    // create classes
    Route::get('/create', CreateController::class)->name('create');

    // show classes
    Route::get('/{id}', ShowController::class)->name('show');

    // edit classes
    Route::get('/{id}/edit', EditController::class)->name('edit');


    Route::post('/', StoreController::class)->name('store');

   
    Route::put('/{id}', UpdateController::class)->name('update');


    Route::delete('/{id}', DestroyController::class)->name('destroy');
});

// majors
Route::resource('majors', MajorController::class);
    



