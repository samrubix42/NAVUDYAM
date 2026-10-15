<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Admin Dashboard | NAVUDYAM Foundation' }}</title>
        <link rel="icon" type="image/webp" href="{{ asset('logo.webp') }}">

        <!-- Fonts: Clean modern typography -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="h-full text-slate-900 font-sans antialiased selection:bg-slate-900 selection:text-white"
          x-data="{ sidebarOpen: false }"
          @keydown.window.escape="sidebarOpen = false">

        <div class="min-h-full flex flex-col lg:flex-row bg-slate-50/70">
            <!-- Sidebar Component -->
            <livewire:admin.sidebar />

            <!-- Main Panel -->
            <div class="flex-1 flex flex-col min-w-0 min-h-screen">
                <!-- Header Component -->
                <livewire:admin.header />

                <!-- Page Content Area -->
                <main class="flex-1 p-4 sm:p-6 lg:p-8">
                    <div class="max-w-7xl mx-auto space-y-6">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>

        @livewireScripts
    </body>
</html>
