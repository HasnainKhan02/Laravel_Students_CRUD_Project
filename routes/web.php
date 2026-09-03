<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', [StudentController::class, 'create'])->name('students.create');

Route::post('/store', [StudentController::class, 'store'])->name('students.store');

Route::get('/dashboard', [StudentController::class, 'index'])->name('students.dashboard');

Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/delete/{id}', [StudentController::class, 'destroy'])->name('students.delete');

Route::get('/students/view/{id}' , [StudentController::class , 'view'])->name('students.view');
