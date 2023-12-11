<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\CustomerbalanceController;
use App\Http\Controllers\backend\CustomerreportController;
use App\Http\Controllers\backend\SupplierController;
use App\Http\Controllers\backend\SupplierbalanceController;
use App\Http\Controllers\backend\SupplierreportController;
use App\Http\Controllers\backend\DashboardController;
use Illuminate\Support\Facades\Route;

// backend route

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('backend/dashboard/dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('customer/index',[CustomerController::class,'index'])->name('customer.index');
    Route::get('customer/insert',[CustomerController::class,'create'])->name('customer.create');
    Route::post('customer/insert',[CustomerController::class,'store'])->name('customer.store');
    Route::get('customer/update/{customer_id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('customer/update/{customer_id}',[CustomerController::class,'update'])->name('customer.update');
    Route::get('customer/destroy/{customer_id}',[CustomerController::class,'destroy'])->name('customer.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('customerbalance/index',[CustomerbalanceController::class,'index'])->name('cb.index');
    Route::get('customerbalance/insert',[CustomerbalanceController::class,'create'])->name('cb.create');
    Route::post('customerbalance/insert',[CustomerbalanceController::class,'store'])->name('cb.store');
    Route::get('customerbalance/update/{cb_id}',[CustomerbalanceController::class,'edit'])->name('cb.edit');
    Route::post('customerbalance/update/{cb_id}',[CustomerbalanceController::class,'update'])->name('cb.update');
    Route::get('customerbalance/destroy/{cb_id}',[CustomerbalanceController::class,'destroy'])->name('cb.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('supplier/index',[SupplierController::class,'index'])->name('supplier.index');
    Route::get('supplier/insert',[SupplierController::class,'create'])->name('supplier.create');
    Route::post('supplier/insert',[SupplierController::class,'store'])->name('supplier.store');
    Route::get('supplier/update/{supplier_id}',[SupplierController::class,'edit'])->name('supplier.edit');
    Route::post('supplier/update/{supplier_id}',[SupplierController::class,'update'])->name('supplier.update');
    Route::get('supplier/destroy/{supplier_id}',[SupplierController::class,'destroy'])->name('supplier.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('supplierbalance/index',[SupplierbalanceController::class,'index'])->name('sb.index');
    Route::get('supplierbalance/insert',[SupplierbalanceController::class,'create'])->name('sb.create');
    Route::post('supplierbalance/insert',[SupplierbalanceController::class,'store'])->name('sb.store');
    Route::get('supplierbalance/update/{sb_id}',[SupplierbalanceController::class,'edit'])->name('sb.edit');
    Route::post('supplierbalance/update/{sb_id}',[SupplierbalanceController::class,'update'])->name('sb.update');
    Route::get('supplierbalance/destroy/{sb_id}',[SupplierbalanceController::class,'destroy'])->name('sb.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('report/customer',[CustomerreportController::class,'customer'])->name('report.customer');

});
Route::middleware('auth')->group(function () {
    Route::get('report/supplier',[SupplierreportController::class,'supplier'])->name('report.supplier');
});

require __DIR__.'/auth.php';




