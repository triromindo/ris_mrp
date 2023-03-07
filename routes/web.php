<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\mst\RawMaterialController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index']);
Route::get('dashboard', [DashboardController::class, 'index']);
Route::resource('raw-material', RawMaterialController::class);
