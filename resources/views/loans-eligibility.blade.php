@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 px-4">
    <!-- Page Title -->
    <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Check Loan Eligibility</h1>

    <!-- Loan Eligibility Form -->
    <form action="{{ route('loan.calculate.eligibility') }}" method="POST" class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
            <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300" required>
        </div>
        <div class="mb-4">
            <label for="mobile" class="block text-sm font-medium text-gray-700 mb-2">Mobile</label>
            <input type="text" id="mobile" name="mobile" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300" required>
        </div>
        <div class="mb-4">
            <label for="income" class="block text-sm font-medium text-gray-700 mb-2">Monthly Income</label>
            <input type="text" id="income" name="income" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300" required>
        </div>
        <div class="mb-4">
            <label for="expense" class="block text-sm font-medium text-gray-700 mb-2">Monthly Expenses</label>
            <input type="text" id="expense" name="expense" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300" required>
        </div>
        <div class="mb-4">
            <label for="emi" class="block text-sm font-medium text-gray-700 mb-2">Existing Loan EMI</label>
            <input type="text" id="emi" name="emi" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300" required>
        </div>
        <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-lg hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-50 transition duration-300">
            Check Eligibility
        </button>
    </form>

    <!-- Eligibility Result -->
    @isset($eligible)
        <div class="max-w-xl mx-auto mt-6 p-4 rounded-lg {{ $eligible ? 'bg-green-100 border-green-500' : 'bg-red-100 border-red-500' }} border">
            @if ($eligible)
                <p class="text-green-700 font-medium">Your Debt-to-Income ratio (DTI) is {{ $dti }}%, which is below the 40% threshold. You are eligible for the loan!</p>
                <a href="{{ route('loan.calculate.emi.page') }}" class="mt-4 inline-block bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-600 transition duration-300">Proceed to Calculate EMI</a>
            @else
                <p class="text-red-700 font-medium">Sorry, based on your current financial situation, you are not eligible for a loan. Your Debt-to-Income ratio (DTI) is {{ $dti }}%.</p>
            @endif
        </div>
    @endisset

    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST" class="max-w-xl mx-auto mt-6">
        @csrf
        <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 transition duration-300">
            Logout
        </button>
    </form>
</div>

<!-- Inline CSS to fix input visibility -->
<style>
    input {
        color: black !important;
        background-color: white !important;
        font-family: Arial, sans-serif;
        font-size: 16px;
    }

    input:focus {
        background-color: #f8fafc !important;
        border-color: #6366f1 !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fields = ['#income', '#expense', '#emi'];
        fields.forEach(fieldId => {
            const field = document.querySelector(fieldId);
            field.addEventListener('input', function (event) {
                let value = event.target.value;
                value = value.replace(/[^0-9\.]/g, '');
                const parts = value.split('.');
                if (parts.length > 2) {
                    value = parts[0] + '.' + parts[1].substring(0, 2);
                }
                event.target.value = value;
            });
        });
    });
</script>
@endsection