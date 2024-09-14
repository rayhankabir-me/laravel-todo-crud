<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');
Route::post('/todos/add', [TodoController::class, 'add'])->name('todos.add');
Route::get('/todos/details/{id}', [TodoController::class, 'details'])->name('todos.details');
Route::get('/todos/edit/{id}', [TodoController::class, 'edit'])->name('todos.edit');
Route::put('/todos/update/', [TodoController::class, 'update'])->name('todos.update');
Route::delete('/todos/delete', [TodoController::class, 'delete'])->name('todos.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
