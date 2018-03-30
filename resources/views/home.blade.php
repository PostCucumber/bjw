<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-white font-sans font-normal bg-cover" style="background-image:url('https://bigjimswalk.com/wp-content/uploads/2017/11/cropped-jim-with-cross.jpg')">
    <div class="flex flex-col mx-4">
        <div class="absolute pin-t pin-l py-4 px-4 bg-black w-full">
            <a href="" class="no-underline font-Rubik text-white hover:text-brand px-2">The Walk</a>
            <a href="" class="no-underline font-normal text-white hover:text-brand px-2">About</a>
            <a href="" class="no-underline font-normal text-white hover:text-brand px-2">Testimonies</a>
            <a href="" class="no-underline font-normal text-white hover:text-brand px-2">Contact</a>
        </div>
        <div class="absolute pin-t pin-r py-4 px-4 bg-brand">
            <a href="" class="no-underline font-normal text-white hover:text-black px-2">Contribute</a>
        </div>
        <div class="min-h-screen flex items-center justify-center">
            <div class="flex flex-col justify-around h-full">
                <div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
