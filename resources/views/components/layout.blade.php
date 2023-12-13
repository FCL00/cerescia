<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ceretia</title>
        {{-- style --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@100;300;400;500;700&family=Signika:wght@300;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/874ad22535.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite('resources/css/app.css')
    </head>
    <body class="font-[Poppins]">


        {{-- navbar  --}}
       
        <nav class="shadow-xl bg-rose-100">
            {{-- flex container --}}
            <div class="container flex items-center justify-between mx-auto p-4">
                <a class="text-rose-500 text-bold hover:text-rose-400">Ceretia</a>
                <div class="hidden md:block space-x-1 ">
                    <a class="hover:text-rose-500" href="">Home</a>
                    <a class="hover:text-rose-500" href="">Products</a>
                    <a class="hover:text-rose-500" href="">Contact</a>
                    <a class="hover:text-rose-500" href="">About</a>
                </div>
                <div>
                    <button class="text-white bg-rose-500 p-2 rounded-md hover:bg-rose-400">Login</button>
                </div>
            </div>
        </nav>



        {{ $slot }}
    </body>
</html>
