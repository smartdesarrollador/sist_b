<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('titulo')</title>

       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
      

       @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    
        @yield('contenido')

    </body>
</html>