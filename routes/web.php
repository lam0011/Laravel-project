<?php


use App\Http\Controllers\LoanEligibilityController;
use Illuminate\Support\Facades\Route;


// Default home route
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
require __DIR__.'/auth.php';

// Loan Eligibility Routes
Route::middleware(['auth'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Loan Eligibility Routes
    Route::get('/loans-eligibility', [LoanEligibilityController::class, 'index'])->name('loans.eligibility');
    Route::post('/calculate-eligibility', [LoanEligibilityController::class, 'calculateEligibility'])->name('loan.calculate.eligibility');
    Route::get('/calculate-emi-page', [LoanEligibilityController::class, 'showEmiPage'])->name('loan.calculate.emi.page');
    Route::post('/calculates-emi', [LoanEligibilityController::class, 'calculateEmi'])->name('loan.calculate.emi');
    

    
});



