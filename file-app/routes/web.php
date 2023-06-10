<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;

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

// ルーティング　書き方
// use App\Http\Controllers\DashboardController;
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//エクセル用のルーティング
Route::get('/excel', [ExcelController::class, 'excel'])->name('excel');
Route::get('/excelExport', [ExcelController::class, 'excelExport'])->name('export');
Route::post('/excelImport', [ExcelController::class, 'excelImport'])->name('import');

