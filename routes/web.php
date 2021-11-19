<?php

use App\Http\Controllers\BloodController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class);

Route::get('hemocomponents', [BloodController::class, 'index'])->name('hemocomponents.index');

Route::get('hemocomponents/create', [BloodController::class, 'create'])->name('hemocomponents.create');

Route::post('hemocomponents', [BloodController::class, 'store'])->name('hemocomponents.store');
    
Route::get('hemocomponents/{component}', [BloodController::class, 'show'])->name('hemocomponents.show');

Route::get('hemocomponents/{component}/edit', [BloodController::class, 'edit'])->name('hemocomponents.edit');

Route::put('hemocomponents/{component}', [BloodController::class, 'update'])->name('hemocomponents.update');
