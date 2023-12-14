<!DOCTYPE html>
<html class="scroll-smooth focus:scroll-auto" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cerecia</title>
    {{-- style --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@100;300;400;500;700&family=Signika:wght@300;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/874ad22535.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="font-[Poppins]">

    <nav class="shadow-lg bg-rose-500 fixed top-0 w-full z-10">
        <!-- Flex container -->
        <div class="container flex items-center justify-between mx-auto p-4">
            <!-- Logo -->
            <a class="text-white text-bold hover:text-rose-400 text-2xl font-bold" href="/">Cerescia</a>
            <!-- Hamburger Menu (Mobile) -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
    
            <!-- Navbar Links (Desktop) -->
            <div class="hidden md:block space-x-1">
                @auth
                    <a class="text-white hover:text-rose-400" href="/">Home</a>
                    <a class="text-white hover:text-rose-400" href="/store">Store</a>
                    <a class="text-white hover:text-rose-400" href="#">Cart</a> 
                    <a class="text-white hover:text-rose-400" href="#">Profile</a>
                @else
                    <a class="text-white hover:text-rose-400" href="#hero">Home</a>
                    <a class="text-white hover:text-rose-400" href="#product-section">Products</a>
                    <a class="text-white hover:text-rose-400" href="#reviews">Reviews</a>
                    <a class="text-white hover:text-rose-400" href="#contact">Contact</a>
                    <a class="text-white hover:text-rose-400" href="#">About</a>
                @endauth
              


            </div>
    
            <!-- Login Button -->
            @auth
                <form class="hidden md:block" action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="text-white bg-rose-700 p-2 rounded-md hover:bg-rose-600">Sign Out</button>
                </form>
            @else
                <div class="hidden md:block">
                    <a href="/login" class="text-white bg-rose-700 p-2 rounded-md hover:bg-rose-600">Login</a>
                </div>
            @endauth
            
        </div>
    </nav>
    
    <!-- Mobile Menu (hidden by default) -->
    <div id="mobile-menu" class="md:hidden fixed top-0 left-0 right-0 bottom-0 bg-rose-500 invisible opacity-0 transition-opacity duration-300">
        <div class="flex justify-end p-4">
            <button id="close-mobile-menu" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="flex flex-col items-center space-y-4 pt-20">
            <a class="text-white hover:text-rose-400" href="#">Home</a>
            <a class="text-white hover:text-rose-400" href="#">Products</a>
            <a class="text-white hover:text-rose-400" href="#">Contact</a>
            <a class="text-white hover:text-rose-400" href="#">About</a>
            <a class="text-white hover:text-rose-400" href="/login">Login</a>
        </div>
    </div>


    {{-- alert messages --}}
    @if(session('success') || session('failure'))
        <div id="flash-message" class="absolute top-0 left-0 w-full pt-8">
            <div class="container mx-auto px-6 pt-16">
                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700" role="alert">
                        <p class="font-bold">Success!</p>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                @if(session('failure'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700" role="alert">
                        <p class="font-bold">Failed!</p>
                        <p>{{ session('failure') }}</p>
                    </div>
                @endif
            </div>
        </div>
    @endif
    
    {{ $slot }}

    {{-- footer --}}
   <footer class="bg-rose-500 text-white py-4">
        <div class="container mx-auto flex flex-col items-center">
            <div class="flex items-center mb-4">
                <img class="w-8 h-8 mr-2" src="" alt="Your Logo">
                <span class="text-xl font-bold">Cerescia</span>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-gray-300">Home</a>
                <a href="#" class="hover:text-gray-300">Products</a>
                <a href="#" class="hover:text-gray-300">About Us</a>
                <a href="#" class="hover:text-gray-300">Contact</a>
            </div>
            <div class="mt-4">
                <p>&copy; 2023 Your Company. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script src="/js/menu.js">

</script>
</body>
</html>
