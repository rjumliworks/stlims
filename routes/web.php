<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['2fa','auth','verified'])->group(function () {
    Route::resource('/profile', App\Http\Controllers\Auth\ProfileController::class);
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/search', [App\Http\Controllers\DashboardController::class, 'search']);
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::middleware(['role:Customer Relation Officer,Technical Manager,Lab Analyst,Laboratory Head,Laboratory Aide'])->group(function () {
        Route::resource('/customers', App\Http\Controllers\Laboratory\CustomerController::class);
        Route::resource('/quotations', App\Http\Controllers\Laboratory\QuotationController::class);
        Route::resource('/samples', App\Http\Controllers\Laboratory\SampleController::class);
        Route::resource('/analyses', App\Http\Controllers\Laboratory\AnalysisController::class);
        Route::resource('/testreports', App\Http\Controllers\Laboratory\TestreportController::class);
        Route::resource('/tsrs', App\Http\Controllers\Laboratory\TsrController::class);
        Route::post('/wallet', [App\Http\Controllers\Finance\WalletController::class, 'store']);
    });

    Route::middleware(['role:Accountant,Cashier'])->group(function () {
        Route::resource('/orderofpayments', App\Http\Controllers\Finance\OpController::class);
        Route::resource('/receipts', App\Http\Controllers\Finance\OrController::class);
        Route::resource('/nonlabreceipts', App\Http\Controllers\Finance\NonlabController::class);
        Route::resource('/cashiering', App\Http\Controllers\Finance\CashieringController::class);
        Route::get('/orseries', [App\Http\Controllers\Finance\CashieringController::class, 'orseries']);
        Route::get('/names', [App\Http\Controllers\Finance\CashieringController::class, 'names']);
    });

    Route::middleware(['role:Releasing Officer'])->group(function () {
        Route::resource('/release', App\Http\Controllers\Laboratory\ReleaseController::class);
    });

    Route::middleware(['role:Administrator'])->group(function () {
        Route::resource('/services', App\Http\Controllers\Laboratory\ServiceController::class);
        Route::resource('/users', App\Http\Controllers\Executive\UserController::class);
        Route::resource('/agencies', App\Http\Controllers\Executive\AgencyController::class);
    });

    Route::resource('/insights', App\Http\Controllers\InsightController::class);
    Route::resource('/reports', App\Http\Controllers\ReportController::class);
    Route::get('/services', [App\Http\Controllers\Laboratory\ServiceController::class, 'index']);
    // Route::resource('/executive', App\Http\Controllers\ExecutiveController::class);
});

require __DIR__.'/auth.php';
