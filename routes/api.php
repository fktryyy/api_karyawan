<?php   

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\BankController;
use Illuminate\Support\Facades\Route;

// Route::apiResource('karyawan', KaryawanController::class);
// Route::apiResource('bank', BankController::class);
Route::post('karyawan', [KaryawanController::class, 'store']);
