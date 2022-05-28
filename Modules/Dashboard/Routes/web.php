<?php

use Modules\Dashboard\Http\Controllers\DashboardController;


Route::prefix('dashboard')->group(function() {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
});


    Route::get('/testhtml', [DashboardController::class, 'testhtml'])->name('test-html');
    
