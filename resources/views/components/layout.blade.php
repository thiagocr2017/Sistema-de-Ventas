<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body class=" bg-gray-100">
    @include('components.nav')
    <div class="flex md:flex-row-reverse flex-wrap h-full md:pb-10 pb-16 pt-4">
        <!--Main Content-->
        <div class="w-full md:w-4/5 bg-gray-100">
            <div class="container mx-auto bg-gray-100 pt-16 px-6">
                <div class="grid gap-4">
                    <!-- Breadcrumb -->
                    <!-- <nav aria-label="breadcrumb" class="bg-gray-800 w-full p-2 rounded-sm"> -->
                    @yield('breadcrumbs')
                    <!-- </nav> -->
                    <!-- End Breadcrumb -->
                    @yield('content')
                </div>
            </div>
        </div>
        @include('components.sidebar')
    </div>
    <div class="w-full h-10 p-2 fixed z-0 bottom-0 bg-gray-600 text-white text-right text-xs font-light">
     <p> Producido por © Thiago Lopez Alfaro</p>
    </div>
</body>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    @yield('script')
</html>