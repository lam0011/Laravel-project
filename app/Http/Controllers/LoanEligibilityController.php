<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanEligibilityController extends Controller
{
    // Display the loan eligibility form
    public function index()
    {
        return view('loans-eligibility');
    }

    // Handle the loan eligibility check
    public function calculateEligibility(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|digits:11',
            'income' => 'required|numeric|min:0',
            'expense' => 'required|numeric|min:0',
            'emi' => 'required|numeric|min:0',
        ]);

        $income = $request->input('income');
        $expense = $request->input('expense');
        $existingEmi = $request->input('emi');

        $dti = (($expense + $existingEmi) / $income) * 100;
        $eligible = $dti < 40;

        return view('loans-eligibility', [
            'dti' => round($dti, 2),
            'eligible' => $eligible,
        ]);
    }

    // Show EMI Calculation Page
    public function showEmiPage()
    {
        return view('calculates-emi'); // Render EMI calculation form
    }

    // Handle EMI calculation
    public function calculateEmi(Request $request)
    {
        $request->validate([
            'loan_amount' => 'required|numeric|min:0',
            'interest_rate' => 'required|numeric|min:0',
            'loan_tenure' => 'required|numeric|min:1',
        ]);

        $loanAmount = $request->input('loan_amount');
        $interestRate = $request->input('interest_rate') / 12 / 100; // Monthly interest rate
        $loanTenure = $request->input('loan_tenure') * 12; // Total months

        // EMI Calculation
        $emi = $loanAmount * $interestRate * pow(1 + $interestRate, $loanTenure) / (pow(1 + $interestRate, $loanTenure) - 1);

        return view('calculates-emi', [
            'emi' => round($emi, 2),
        ]);
    }
}
