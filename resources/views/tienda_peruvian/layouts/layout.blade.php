<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('titulo')</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{--  1 - Megamenu --}}
    <link rel="stylesheet" href="{{ asset('assets_tienda/css/megamenu.css') }}">
    {{--  /1 - Megamenu --}}
</head>

<body>
    {{--  2 - Megamenu --}}
    @include('tienda_peruvian.layouts.megamenu')
    {{--  /2 - Megamenu --}}

    {{--  1 - Carousel --}}
    @include('tienda_peruvian.layouts.carousel')
    {{--  /1 - Carousel --}}

    @yield('contenido')



</body>

</html>
