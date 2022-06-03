<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
  
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

Route::get('/dashboard', [VehicleController::class, 'index'])->name('dashboard');

Route::resource('vehicles', VehicleController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
