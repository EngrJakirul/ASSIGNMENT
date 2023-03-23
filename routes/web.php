<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CompaniesController;
use App\Http\Controllers\Admin\EmployeesController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/add-company', [CompaniesController::class, 'addCompanies'])->name('company.add');
    Route::post('/create-company', [CompaniesController::class, 'CreateCompanies'])->name('company.create');
    Route::get('/edit-company/{id}', [CompaniesController::class, 'editCompanies'])->name('company.edit');
    Route::post('/update-company/{id}', [CompaniesController::class, 'updateCompanies'])->name('company.update');
    Route::get('/delete-company/{id}', [CompaniesController::class, 'deleteCompanies'])->name('company.delete');
    Route::get('/manage-company', [CompaniesController::class, 'manageCompanies'])->name('company.manage');

    Route::get('/add-employee', [EmployeesController::class, 'addEmployees'])->name('employee.add');
    Route::post('/create-employee', [EmployeesController::class, 'createEmployees'])->name('employee.create');
    Route::get('/edit-employee/{id}', [EmployeesController::class, 'editEmployees'])->name('employee.edit');
    Route::get('/delete-employee/{id}', [EmployeesController::class, 'deleteEmployees'])->name('employee.delete');
    Route::post('/update-employee/{id}', [EmployeesController::class, 'updateEmployees'])->name('employee.update');
    Route::get('/manage-employee', [EmployeesController::class, 'manageEmployees'])->name('employee.manage');

});
