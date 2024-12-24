<?php

use App\Http\Controllers\LoanEligibilityController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/loan-eligibility', [LoanEligibilityController::class, 'index'])->name('loan.eligibility');
    Route::post('/calculate-eligibility', [LoanEligibilityController::class, 'calculateEligibility'])->name('loan.calculate.eligibility');
    Route::post('/calculate-emi', [LoanEligibilityController::class, 'calculateEmi'])->name('loan.calculate.emi');
});
