<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style_dangchieu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style_sapchieu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/stylett.css') }}">

        <link rel="stylesheet" href="{{ asset('css/MHTT.css') }}">
        <link rel="stylesheet" href="{{ asset('css/QMTT.css') }}">
        <link rel="stylesheet" href="{{ asset('css/TTTC.css') }}">

        <!--<script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/menu.js') }}"></script>
        
        <script src="{{ asset('js/QMTT.js') }}"></script>-->

        
    </head>
    <body class="font-sans antialiased">
        <div class="bg-gray-100 py-8">
            @include('partials.header')

            <!-- Nội dung trang -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @include('partials.footer') <!-- Nhúng Footer -->

        

        @stack('styles')
        @stack('scripts')


        <script>
            $(document).ready(function(){
                $(".menu-trigger").click(function(){
                    if($(".dropdown-menu").hasClass("show"))
                        $(".dropdown-menu").removeClass("show");
                    else
                        $(".dropdown-menu").addClass("show");
                });
            });
        </script>
    </body>

</html>
