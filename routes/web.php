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

Route::get('finish-product', function () {
    return view('mst.finish_product.index');
});

Route::get('supplier', function () {
    return view('mst.supplier.index');
});

Route::get('supplier-other', function () {
    return view('mst.supplier_other.index');
});

Route::get('atk', function () {
    return view('mst.atk.index');
});

Route::get('kelompok-produk-raw-mat', function () {
    return view('mst.kel_raw.index');
});

Route::get('std-man-h', function () {
    return view('mst.std_man_h.index');
});

Route::get('rate', function () {
    return view('mst.rate.index');
});

Route::get('group-production', function () {
    return view('mst.group_production.index');
});
