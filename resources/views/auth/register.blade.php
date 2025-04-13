<link rel="stylesheet" href="app.css">

<x-app-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group mb-4">
                <x-label for="name" :value="__('Họ và Tên')" class="font-semibold text-gray-700" />
                <x-input id="name" class="block mt-1 w-full border rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 p-2" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Phone -->
            <div class="form-group mb-4">
                <x-label for="phone" :value="__('Số điện thoại')" class="font-semibold text-gray-700" />
                <x-input id="phone" class="block mt-1 w-full border rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 p-2" type="text" name="phone" :value="old('phone')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4 form-group mb-4">
                <x-label for="email" :value="__('Email')" class="font-semibold text-gray-700" />
                <x-input id="email" class="block mt-1 w-full border rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 p-2" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4 form-group mb-4">
                <x-label for="password" :value="__('Mật khẩu')" class="font-semibold text-gray-700" />
                <x-input id="password" class="block mt-1 w-full border rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 p-2"
                        type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 form-group mb-4">
                <x-label for="password_confirmation" :value="__('Nhập lại mật khẩu')" class="font-semibold text-gray-700" />
                <x-input id="password_confirmation" class="block mt-1 w-full border rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 p-2"
                        type="password" name="password_confirmation" required />
            </div>

            <!-- Gender -->
            <div class="form-group mb-6">
                <x-label for="gender" :value="__('Giới tính')" class="font-semibold text-gray-700" />
                <div class="flex items-center">
                    <x-input type="radio" id="gender_male" name="gender" value="male" class="mr-2" required />
                    <label for="gender_male">Nam</label>
                    <x-input type="radio" id="gender_female" name="gender" value="female" class="ml-4 mr-2" />
                    <label for="gender_female">Nữ</label>
                </div>
            </div>

            <!-- Register Button -->
            <div class="button-container mt-6 flex items-center justify-end">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Đã có tài khoản?') }}
                </a>

                <x-button class="ml-4 bg-red-600 text-white hover:bg-red-700">
                    {{ __('Đăng ký') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
