<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\mst\RawMaterialController;

Route::middleware('role_guest')->group(function () {
    Route::get('/', [AuthController::class, 'login']);
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'loginProcess']);
    Route::get('admin', [AuthController::class, 'loginAdmin'])->name('login-admin');
    Route::post('admin', [AuthController::class, 'loginAdminProcess'])->name('login-admin');
});

Route::group(['middleware' => ['auth', 'web']], function () {
    Route::get('dashboard', [DashboardController::class, 'index']);

    /* Auth Controller*/
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('change-password', [AuthController::class, 'changePassword'])->name('change-password');
    Route::post('change-password', [AuthController::class, 'updatePassword'])->name('update-password');

    // Route::middleware(['roles:admin'])->group(function () {
    //     Route::resource('/users', UserController::class);
    //     Route::put('/user/reset-password', [UserController::class, 'resetPassword']);
    // });

    // Route::middleware(['roles:purchasing,manager,accounting,spv,qc'])->group(function () {
    // Route::resource('raw-material', RawMaterialController::class);
    // Route::resource('finish-product', FinishProductController::class);
    // Route::resource('supplier', SupplierController::class);
    // Route::resource('supplier-other', SupplierOtherController::class);
    // Route::resource('atk', AtkController::class);
    // Route::resource('kelompok-produk-raw-mat', GroupProductController::class);
    // Route::get('std-man-h', [StdManHourController::class, 'index']);
    // Route::resource('rate', RateController::class);
    // Route::resource('group-production', GroupProductionController::class);
    // Route::resource('config-no-slip', ConfigNoSlipController::class);
    // });
});

// Route::get('/', function () {
//     return view('dashboard.user');
// });

// Route::get('dashboard', function () {
//     return view('dashboard.user');
// });

// Route::get('raw-material', function () {
//     return view('mst.raw_material.index');
// });

// Route::get('finish-product', function () {
//     return view('mst.finish_product.index');
// });

// Route::get('supplier', function () {
//     return view('mst.supplier.index');
// });

// Route::get('supplier-other', function () {
//     return view('mst.supplier_other.index');
// });

// Route::get('atk', function () {
//     return view('mst.atk.index');
// });

// Route::get('kelompok-produk-raw-mat', function () {
//     return view('mst.kel_raw.index');
// });

// Route::get('std-man-h', function () {
//     return view('mst.std_man_h.index');
// });

// Route::get('rate', function () {
//     return view('mst.rate.index');
// });

// Route::get('group-production', function () {
//     return view('mst.group_production.index');
// });