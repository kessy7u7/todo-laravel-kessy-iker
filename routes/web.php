<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TodoController::class, 'show'])->name('todo.index');
Route::post('todo', [TodoController::class, 'store'])->name('todo.store');
Route::get('todo/{id}', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('todo/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('todo/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');
