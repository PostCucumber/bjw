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
<body>
    <div class="flex flex-col">
        <div class="absolute pin-t pin-l py-4 px-4 bg-black w-full h-12">
            <a href="" class="no-underline font-Rubik text-white hover:text-brand px-2">The Walk</a>
            <a href="" class="no-underline font-normal text-white hover:text-brand px-2">About</a>
            <a href="" class="no-underline font-normal text-white hover:text-brand px-2">Testimonies</a>
            <a href="" class="no-underline font-normal text-white hover:text-brand px-2">Contact</a>
        </div>
        <div class="absolute pin-t pin-r py-4 px-4 bg-brand h-12">
            <a href="" class="no-underline font-normal text-white hover:text-black px-2">Contribute</a>
        </div>
    </div>
    <div class="flex h-screen bg-cover bg-top mt-12" style="background-image:url('https://bigjimswalk.com/wp-content/uploads/2018/04/jim-with-cross_gradient.jpg')">
        <div class="absolute mt-24 ml-16 pin-t pin-l">
            <img class="w-48" src="https://bigjimswalk.com/wp-content/themes/vega/assets/img/BJW_logo-trans.png">
        </div>
    </div>
    <div class="flex-col bg-black h-auto text-white">
        <h1 class="text-center text-4xl border-b-2 border-bottom border-brand mx-24 pt-16 pb-8">A Journey of Hope</h1>
        <p class="text-left mx-8 md:mx-16 leading-loose text-lg pt-8 pb-8 lg:pb-16">Big Jim’s Walk, Inc is a non-profit organization with advocates serving the community and directing those who suffer from addiction. We assist in addiction recovery by bringing awareness to the epidemic of addiction through a message of hope in Jesus Christ! Big Jim’s Walk plans to build an addiction recovery center, C.A.M.P Redemption, with help from donors and other community members.</p>
    </div>
    <div class="bg-black">
        <img class="w-full h-auto" src="https://bigjimswalk.com/wp-content/uploads/2017/05/mountains.png">
    </div>
    <div class="bg-brand h-64 text-white">
        <h1 class="text-center p-8 text-4xl border-b-2 border-bottom border-brand mx-8">The numbers so far...</h1>
        <div class="flex">
            <div class="flex-1 text-center leading-loose text-lg">
                <h1>1563+</h1>
                <p>miles walked</p>
            </div>
            <div class="flex-1 text-center leading-loose text-lg">
                <h1>63</h1>
                <p>speeches given</p>
            </div>
            <div class="flex-1 text-center leading-loose text-lg">
                <h1>4</h1>
                <p>pairs of shoes</p>
            </div>
            <div class="flex-1 text-center leading-loose text-lg">
                <h1>1</h1>
                <p>God served</p>
            </div>
        </div>
    </div>
    <div class="bg-brand h-auto py-4 pl-4">
        <a href="" class="no-underline font-Rubik text-white hover:text-brand px-2">The Walk</a>
        <a href="" class="no-underline font-normal text-white hover:text-brand px-2">About</a>
        <a href="" class="no-underline font-normal text-white hover:text-brand px-2">Testimonies</a>
        <a href="" class="no-underline font-normal text-white hover:text-brand px-2">Contact</a>
    </div>
</body>
</html>
