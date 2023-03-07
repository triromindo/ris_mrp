<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\mst\RawMaterialController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.user');
});

Route::get('dashboard', function () {
    return view('dashboard.user');
});

Route::get('raw-material', function () {
    return view('mst.raw_material.index');
});
