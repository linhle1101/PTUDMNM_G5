<x-app-layout>  
    <x-auth-card class="w-full max-w-xl bg-white p-8 rounded-xl shadow-xl transform scale-105"> 
        <x-slot name="logo">
                <h2 class="text-red-600 text-2xl font-bold mb-4 -mt-6">{{ __('Forgot your password?') }}</h2>
        </x-slot>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('forgot_password_description') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('send_reset_link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
