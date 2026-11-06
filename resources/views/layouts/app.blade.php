<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'NAVUDYAM Foundation | Where New Ideas Find New Beginnings' }}</title>
        <meta name="description" content="NAVUDYAM Foundation is a community-driven initiative focused on education, skill development, mentorship, entrepreneurship and meaningful collaboration. Rooted in Navodaya. Open to Everyone.">
        <meta name="keywords" content="NAVUDYAM Foundation, Education, Skill Development, Mentorship, Entrepreneurship, Navodaya, JNV, Open to Everyone, Community Collaboration, Allied Industry">
        <link rel="icon" type="image/webp" href="{{ asset('logo.webp') }}">

        <!-- Fonts: Slim & Clean Typography (Urbanist + Inter) -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Urbanist:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Remix Icon -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css" rel="stylesheet">

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

        <!-- Public Join / Inquiry Modal Component -->
        <livewire:public::join-modal />

        <!-- Alpine.js Global Toaster -->
        <x-ui.toaster />

        @livewireScripts
    </body>
</html>

