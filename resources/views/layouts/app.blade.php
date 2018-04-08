<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main>
            @section('navigation')
            <div class="flex flex-col">
                <div class="absolute pin-t pin-l py-4 px-4 bg-black w-full h-12">
                    <a href="/the-walk" class="no-underline font-Rubik text-white hover:text-brand px-2">The Walk</a>
                    <a href="" class="no-underline font-normal text-white hover:text-brand px-2">About</a>
                    <a href="" class="no-underline font-normal text-white hover:text-brand px-2">Testimonies</a>
                    <a href="" class="no-underline font-normal text-white hover:text-brand px-2">Contact</a>
                </div>
                <div class="absolute pin-t pin-r py-4 px-4 bg-brand h-12">
                    <a href="" class="no-underline font-normal text-white hover:text-black px-2">Contribute</a>
                </div>
            </div>
            @endsection

            @yield('navigation')
            @yield('content')
        </main>
    </div>
</body>
</html>
