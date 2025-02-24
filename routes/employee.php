<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::prefix('/employee')->middleware('auth')->group(function() {
    Route::get('/', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/store', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::delete('/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
});
