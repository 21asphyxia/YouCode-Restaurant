<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- require tailwind plugin --}}
        <style>
            @tailwind 'resources/layouts/tailwind.config.js';
        </style>
        
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <section class="bg-[#F4F7FF] flex items-center py-20 lg:py-[120px] h-screen">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-white py-16 px-10 text-center sm:px-12 md:px-[60px]">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
