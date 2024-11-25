<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/switchColor.js'])
    </head>

    <body class=" font-sans antialiased overflow-x-hidden">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex">
            <!-- Sidebar -->
            <div class="fixed bg-gray-100 h-screen z-10 w-64 hidden lg:block">
                <x-asidebar></x-asidebar>
            </div>
            <!-- Main Content -->
            <main class="flex pt-24 flex-col w-full transition-all duration-300 ml-0 lg:ml-64 overflow-x-hidden">
                <!-- Header -->
                <div class="fixed top-0 left-0 right-0 lg:left-64 z-20 overflow-x-visible">
                    @include('layouts.navigation')
                    @isset($header)
                        <header class="bg-white dark:bg-gray-800 shadow">
                            <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endisset
                </div>
                <!-- Slot -->
                {{ $slot }}
                <!-- Footer -->
                <x-footer-app></x-footer-app>
            </main>
        </div>
    </body>
    
</html>
