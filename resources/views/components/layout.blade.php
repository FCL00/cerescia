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
            <a class="text-white text-bold hover:text-rose-400 text-2xl font-bold" href="#">Cerecia</a>
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
                <a class="text-white hover:text-rose-400" href="#hero">Home</a>
                <a class="text-white hover:text-rose-400" href="#product-section">Products</a>
                <a class="text-white hover:text-rose-400" href="#contact">Contact</a>
                <a class="text-white hover:text-rose-400" href="#">About</a>
            </div>
    
            <!-- Login Button -->
            <div class="hidden md:block">
                <button class="text-white bg-rose-700 p-2 rounded-md hover:bg-rose-600">Login</button>
            </div>
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
            <a class="text-white hover:text-rose-400" href="#">Login</a>
        </div>
    </div>
    
    {{ $slot }}

    <!-- JavaScript for Mobile Menu Toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMobileMenuButton = document.getElementById('close-mobile-menu');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('invisible');
            mobileMenu.classList.toggle('opacity-100');
        });

        closeMobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.add('invisible');
            mobileMenu.classList.remove('opacity-100');
        });

        // Adjust navbar background on scroll for sticky effect
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.fixed');
            navbar.classList.toggle('bg-rose-100', window.scrollY > 0);
        });
    });
</script>
</body>
</html>
