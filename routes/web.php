<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/vini', [DemoController::class, 'index']);
Route::get('/form', [RegistrationController::class, 'registarion']);
Route::post('/form', [RegistrationController::class, 'store']);
Route::get('/form/view', [RegistrationController::class, 'view'])->name('customer.list'); // rout access throw this name
Route::get('/form/view/delete/{id}', [RegistrationController::class, 'Delete'])->name('customer_dlt');
Route::get('/form/view/restore/{id}', [RegistrationController::class, 'restore'])->name('customer_restore');
Route::get('/form/view/edit/{id}', [RegistrationController::class, 'Edit'])->name('customer_edit');
Route::post('/form/update/{id}', [RegistrationController::class, 'update'])->name('customer_update');
Route::get('form/trash', [RegistrationController::class, 'trashed'])->name('trashed_data');
Route::get('/form/view/forceDelete/{id}', [RegistrationController::class, 'force_dlt'])->name('force_dltd');
