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
    <div class="flex md:flex-row-reverse flex-wrap">
    <!--Main Content-->
    <div class="w-full md:w-4/5 bg-gray-100">
        <div class=" bg-gray-100 pt-16 px-6">
            <div class="container mx-auto pt-4">
                <nav aria-label="breadcrumb" class="bg-gray-800 w-full p-2 rounded-sm">
                    <ol class="flex leading-none text-xs text-white">
                        @if(Breadcrumbs::has())
                            @foreach (Breadcrumbs::current() as $crumbs)
                                @if ($crumbs->url() && !$loop->last)
                                    <li class="breadcrumb-item hover:text-pink-500 ">
                                        <a href="{{ $crumbs->url() }}">
                                            {{ $crumbs->title() }}
                                        </a>
                                    </li>
                                    <span class="ml-2 mr-2"> | </span>
                                @else
                                    <li class="breadcrumb-item active">
                                        {{ $crumbs->title() }}
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    </ol>
                </nav>
        @yield('content')
            </div>
        </div>
    </div>
    @include('components.sidebar')
    </div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/chart.js') }}"></script>
@yield('script')
</html>