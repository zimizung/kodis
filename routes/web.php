<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VpensController;
use App\Http\Controllers\LeavesController;
use App\Http\Controllers\PensionsController;
use App\Http\Controllers\HistoriesController;
use App\Http\Controllers\MortgagesController;
use App\Http\Controllers\PersonalsController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\LeavecreditsController;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/userDetail/{kodis}', [HomeController::class, 'getUser'])->name('userDetails');

Route::get('/history/{kodis}', [HistoriesController::class, 'index'])->name('history');
Route::get('/leavecredit', [LeavecreditsController::class, 'index'])->name('leavecredits');
Route::get('/leave/{kodis}', [LeavesController::class, 'index'])->name('leave');
Route::get('/mortgage/{kodis}', [MortgagesController::class, 'index'])->name('mortgage');
Route::get('/pension/{kodis}', [PensionsController::class, 'index'])->name('pension');
Route::get('/personal', [PersonalsController::class, 'index'])->name('personal');
Route::get('/property/{kodis}', [PropertiesController::class, 'index'])->name('property');
Route::get('/user', [UsersController::class, 'index'])->name('user');
Route::get('/vpen', [VpensController::class, 'index'])->name('vpen');