<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'NAVUDYAM Foundation | Empowering Navodayans — From Skills to Enterprise' }}</title>
        <meta name="description" content="NAVUDYAM Foundation is dedicated to empowering Jawahar Navodaya Vidyalaya students, alumni, and rural youth through education, entrepreneurship incubation, lifelong mentorship, and community-led enterprise.">
        <meta name="keywords" content="NAVUDYAM Foundation, Navodaya, JNV Alumni, Jawahar Navodaya Vidyalaya, Entrepreneurship, Mentorship, Rural Youth, Laundry & Allied Services, Skills to Enterprise">
        <link rel="icon" type="image/webp" href="{{ asset('logo.webp') }}">

        <!-- Fonts: Slim & Clean Typography (Urbanist + Inter) -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Urbanist:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-amber-500 selection:text-white flex flex-col min-h-screen">
        <!-- Site Header -->
        <x-public.header.header />

        <!-- Main Content Area -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Site Footer -->
        <x-public.footer.footer />

        @livewireScripts
    </body>
</html>

