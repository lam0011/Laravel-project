<x-guest-layout>
    <!-- Container for the forgot password form -->
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-blue-100 to-blue-200">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
            <!-- Title -->
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-4">Forgot Your Password?</h2>

            <!-- Info Message -->
            <div class="mb-4 text-sm text-gray-600">
                {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Password Reset Form -->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Input -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input 
                        id="email" 
                        class="block mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        autofocus 
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end mt-6">
                    <x-primary-button class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 transition flex justify-center items-center">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>

            <!-- Footer with Register Link -->
            <div class="mt-4 text-center">
                <p class="text-sm text-gray-600">
                    {{ __("Don't have an account?") }} 
                    <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800">{{ __('Register here') }}</a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
