@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-20 px-6 bg-gradient-animation">
    <!-- Profile Section -->
    <div class="flex justify-center items-center mb-12">
        <div class="bg-white shadow-lg rounded-3xl p-8 w-full max-w-4xl flex items-center space-x-8">
            <!-- Profile Picture -->
            <div class="flex-shrink-0">
                <img src="https://www.gravatar.com/avatar/{{ md5(auth()->user()->email) }}" 
                     alt="Profile Picture of {{ auth()->user()->name }}" 
                     class="w-32 h-32 rounded-full border-4 border-indigo-500 shadow-xl">
            </div>
            <!-- User Info -->
            <div class="flex-grow">
                <h2 class="text-3xl font-semibold text-gray-800">Welcome back, {{ auth()->user()->name }}</h2>
                <p class="text-lg text-gray-600 mt-2">Here's an overview of your account and settings.</p>
            </div>
        </div>
    </div>

    <!-- Account and Profile Details Section -->
    <div class="bg-white shadow-lg rounded-3xl p-8 mb-12 w-full max-w-4xl mx-auto">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Account Information</h2>
        <div class="space-y-6">
            @foreach ([
                'Email Address' => auth()->user()->email,
                'Phone Number' => auth()->user()->mobile,
                'Account Created On' => auth()->user()->created_at->format('M d, Y')
            ] as $label => $value)
                <div class="flex justify-between">
                    <p class="text-lg text-gray-600">{{ $label }}:</p>
                    <p class="text-lg text-gray-800">{{ $value }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Action Buttons Section -->
    <div class="flex justify-center items-center space-x-6">
        <!-- Check Eligibility Button -->
        <a href="{{ route('loans.eligibility') }}" 
           class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold py-3 px-8 rounded-full shadow-xl transform hover:scale-105 hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all duration-300 ease-in-out">
            Check Eligibility
        </a>

        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" 
                    class="bg-gradient-to-r from-red-500 to-pink-600 text-white font-semibold py-3 px-8 rounded-full shadow-xl transform hover:scale-105 hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-red-500 transition-all duration-300 ease-in-out">
                Logout
            </button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Global Styles */
    body {
        background: linear-gradient(135deg, #e3f2fd, #bbdefb);
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
    }

    /* Gradient Animation */
    @keyframes gradientAnimation {
        0%, 100% { background: linear-gradient(to right, #4F46E5, #8B5CF6); }
        50% { background: linear-gradient(to right, #EC4899, #F472B6); }
    }

    .bg-gradient-animation {
        animation: gradientAnimation 10s ease infinite;
    }

    /* Hover Effects */
    a:hover,
    button:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 20px;
        }

        .bg-white {
            padding: 4px;
        }

        .flex {
            flex-direction: column;
            align-items: center;
        }

        .w-full {
            max-width: 100%;
        }

        img {
            width: 60px;
            height: 60px;
        }
    }
</style>
@endpush
