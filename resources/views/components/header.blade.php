<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Font Awesome CDN for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

    <!-- Flowbite JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="{{ asset('/css/a.css') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/kry.png')}}" type="image/png">

    <title>{{ isset($title) ? $title : 'Rey' }}</title>
</head>
<body class="relative">
    <div class="m-10"> 
        
        <!-- Overlay for dimming background when menu is open -->
        <div id="overlay" class="fixed inset-0 z-30 hidden" onclick="toggleMenu()"></div>

        <!-- Navigation Bar -->
        <nav class="bg-white dark:bg-gray-900 fixed w-full z-40 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <!-- Logo Section -->
                <a href="javascript:void(0)" id="logo" class="hu flex items-center space-x-3 rtl:space-x-reverse cursor-pointer">
                    <img src="{{ asset('/img/kry.png')}}" alt="Kry Logo" class="h-10 w-10">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Kry-Tester</span>
                </a>
                
                <!-- Hamburger Menu Button for Mobile -->
                <button id="menu-button" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>

                <!-- Navigation Links (Desktop) -->
                <div id="navbar-sticky" class="items-center justify-between hidden w-full md:flex md:w-auto">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{ route('home') }}" 
                               class="hu block py-2 pl-3 pr-4 text-gray-700 rounded md:bg-transparent md:text-gray-700 md:p-0 dark:text-white {{ Route::is('home') ? 'active' : '' }}">
                               Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('tasks.index') }}" 
                               class="hu block py-2 pl-3 pr-4 text-gray-700 rounded md:bg-transparent md:text-gray-700 md:p-0 dark:text-white {{ Route::is('about') ? 'active' : '' }}">
                               To Do List
                            </a>
                        </li>
                        <li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Drawer Navigation Menu -->
        <div id="drawer-menu" class="drawer-menu fixed top-0 left-0 z-50 w-64 h-full p-4 bg-white dark:bg-gray-800 shadow-lg drawer-closed">
            <h5 class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
            <button type="button" id="close-button" class="absolute top-2.5 right-2.5 text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                <span class="sr-only">Close menu</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul class="mt-6 space-y-2 font-medium">
                <li><a href="{{ route('home') }}" class="hu block py-2 text-gray-700 dark:text-white">Home</a></li>
                <li><a href="{{ route('tasks.index') }}" class="hu block py-2 text-gray-700 dark:text-white">To do List</a></li>
            </ul>
        </div>
        <script>
            $(document).ready(function() {
                // Function to toggle drawer menu and overlay visibility
                function toggleMenu() {
                    $('#drawer-menu').toggleClass('drawer-closed drawer-open');
                    $('#overlay').toggleClass('hidden');
                }

                // Toggle menu on logo and menu button click
                $('#logo, #menu-button').click(toggleMenu);

                // Close menu on close button click
                $('#close-button').click(toggleMenu);

                // Close menu on overlay click
                $('#overlay').click(toggleMenu);
            });
        </script>

    </div>
</body>
</html>
