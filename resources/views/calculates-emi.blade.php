@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-blue-200 to-blue-300">
    <div class="w-full max-w-xl bg-white p-8 rounded-lg shadow-md">
        <!-- Page Title -->
        <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">Calculate EMI</h1>

        <!-- EMI Calculation Form -->
        <form action="{{ route('loan.calculate.emi') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Loan Amount -->
            <div>
                <label for="loan_amount" class="block text-sm font-medium text-gray-700 mb-2">Loan Amount</label>
                <input type="number" id="loan_amount" name="loan_amount" 
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-blue-500 focus:border-blue-500" 
                       placeholder="Enter loan amount" required>
            </div>
            <!-- Interest Rate -->
            <div>
                <label for="interest_rate" class="block text-sm font-medium text-gray-700 mb-2">Interest Rate (%)</label>
                <input type="number" id="interest_rate" name="interest_rate" 
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-blue-500 focus:border-blue-500" 
                       placeholder="Enter interest rate" required>
            </div>
            <!-- Loan Tenure -->
            <div>
                <label for="loan_tenure" class="block text-sm font-medium text-gray-700 mb-2">Loan Tenure (Years)</label>
                <input type="number" id="loan_tenure" name="loan_tenure" 
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-blue-500 focus:border-blue-500" 
                       placeholder="Enter loan tenure" required>
            </div>
            <!-- Submit Button -->
            <button type="submit" 
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-300">
                Calculate EMI
            </button>
        </form>

        <!-- EMI Result -->
        @isset($emi)
            <div class="mt-6 bg-blue-100 border border-blue-500 text-blue-700 p-4 rounded-lg">
                <p class="text-center font-medium">Your monthly EMI for the loan is {{ $emi }} TK.</p>
            </div>
        @endisset

        <!-- Action Buttons -->
        <div class="mt-8 flex justify-between gap-4">
            <!-- Check Loan Eligibility -->
            <a href="{{ route('loans.eligibility') }}" 
               class="w-1/2 text-center bg-gray-500 text-white py-2 rounded-lg hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 transition duration-300">
                Check Loan Eligibility
            </a>
            <!-- Logout -->
            <form action="{{ route('logout') }}" method="POST" class="w-1/2">
                @csrf
                <button type="submit" 
                        class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 transition duration-300">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>

@push('styles')
<style>
    input {
        color: black !important;
        background-color: white !important;
        font-family: Arial, sans-serif;
        font-size: 16px;
    }

    input:focus {
        background-color: #f0f9ff !important;
        border-color: #3b82f6 !important;
    }

    /* Ensure responsive design */
    @media (max-width: 640px) {
        .w-1/2 {
            width: 100% !important;
        }

        .gap-4 {
            gap: 2rem !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const numericFields = ['#loan_amount', '#interest_rate', '#loan_tenure'];

        numericFields.forEach(fieldId => {
            const field = document.querySelector(fieldId);
            field.addEventListener('input', function (event) {
                let value = event.target.value.replace(/[^0-9.]/g, ''); // Only numbers and dot
                const parts = value.split('.');
                if (parts.length > 2) {
                    value = parts[0] + '.' + parts[1].slice(0, 2); // Limit to 2 decimals
                }
                event.target.value = value;
            });
        });
    });
</script>
@endpush
@endsection
