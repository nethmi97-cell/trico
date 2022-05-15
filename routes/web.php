<?php

use App\Http\Controllers\Client\DashboardController;
use App\Http\Controllers\SuperAdmin\AdminController;
use App\Http\Controllers\SuperAdmin\ConsigneeController;
use App\Http\Controllers\SuperAdmin\ContainerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('client.index'); })->name('client.index');
Route::get('/about', function () { return view('client.about'); })->name('client.about');
Route::get('/career', function () { return view('client.career'); })->name('client.career');
Route::get('/network', function () { return view('client.network'); })->name('client.network');
Route::get('/contact', function () { return view('client.contact'); })->name('client.contact');
Route::get('/service', function () { return view('client.service'); })->name('client.service');
Route::get('/product-service', function () { return view('client.product-service'); })->name('client.product-service');

Auth::routes();


Route::group(['prefix' => 'superadministrator', 'middleware' => ['role:superadministrator']], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('superadmin.index');
    Route::get('/container', [ContainerController::class, 'index'])->name('superadmin.container.index');
    Route::get('/container/create', [ContainerController::class, 'create'])->name('superadmin.container.create');
    Route::post('/container', [ContainerController::class, 'store'])->name('superadmin.container.store');
    Route::get('/container/{id}', [ContainerController::class, 'show'])->name('superadmin.container.show');
    Route::patch('/container/{id}', [ContainerController::class, 'update'])->name('superadmin.container.update');

    Route::get('/consignee', [ConsigneeController::class, 'index'])->name('superadmin.consignee.index');
    Route::get('/consignee/create', [ConsigneeController::class, 'create'])->name('superadmin.consignee.create');
    Route::post('/consignee', [ConsigneeController::class, 'store'])->name('superadmin.consignee.store');
    Route::get('/consignee/{id}', [ConsigneeController::class, 'show'])->name('superadmin.consignee.show');
    Route::patch('/consignee/{id}', [ConsigneeController::class, 'update'])->name('superadmin.consignee.update');

});

Route::group(['prefix' => 'administrator', 'middleware' => ['role:superadministrator|administrator']], function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');

});


Route::group(['prefix' => 'account', 'middleware' => ['role:superadministrator|administrator|client']], function () {

    Route::get('/overview', [DashboardController::class, 'index'])->name('client.account.index');

});
