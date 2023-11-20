<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Accounts
Route::get('/index-account', [AccountController::class, 'index'])->name('account.index');
Route::get('/create-account', [AccountController::class, 'create'])->name('account.create');
Route::post('/store-account', [AccountController::class, 'store'])->name('account.store');
Route::get('/show-account/{account}', [AccountController::class, 'show'])->name('account.show');
Route::get('/edit-account/{account}', [AccountController::class, 'edit'])->name('account.edit');
Route::put('/update-account/{account}', [AccountController::class, 'update'])->name('account.update');
Route::delete('/destroy-account', [AccountController::class, 'destroy'])->name('account.destroy');
