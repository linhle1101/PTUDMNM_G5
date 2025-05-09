<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<<<<<<< HEAD
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="stylesheet" href="{{ asset('css/style_dangchieu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style_sapchieu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/MHTT.css') }}">
        <link rel="stylesheet" href="{{ asset('css/QMTT.css') }}">
        
 <script src="{{ asset('js/app.js') }}" defer></script>
 <script src="{{ asset('js/menu.js') }}"></script>
 <script src="{{ asset('js/MHTT.js') }}"></script>
 <script src="{{ asset('js/QMTT.js') }}"></script>



    </head>
    <body>
    @include('partials.header') <!-- Chèn Header ngay sau thẻ <body> -->
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

    @include('partials.footer') <!-- Chèn Footer ngay trước </body> -->
    <!-- Các nội dung khác -->
    @stack('styles')
    @stack('scripts')

</body>
</html>
