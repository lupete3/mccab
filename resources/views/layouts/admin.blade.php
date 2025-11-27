<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <style>
        .admin-sidebar {
            transition: transform 0.3s ease-in-out;
        }
        @media (max-width: 768px) {
            .admin-sidebar {
                transform: translateX(-100%);
            }
            .admin-sidebar.open {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <aside
            class="admin-sidebar absolute md:relative w-64 bg-gray-800 text-white p-4 z-20"
            :class="{'open': sidebarOpen}"
        >
            <div class="mb-8">
                <a href="{{ route('dashboard') }}" class="text-2xl font-bold">Admin Panel</a>
            </div>
            <nav class="space-y-2">
                <a href="{{ route('dashboard') }}" class="flex items-center p-2 rounded-md hover:bg-gray-700 @if(request()->routeIs('dashboard')) bg-gray-900 @endif">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('admin.practice-areas.index') }}" class="flex items-center p-2 rounded-md hover:bg-gray-700 @if(request()->routeIs('admin.practice-areas.*')) bg-gray-900 @endif">
                    <i class="fas fa-briefcase mr-3"></i>
                    <span>Practice Areas</span>
                </a>
                <a href="#" class="flex items-center p-2 rounded-md hover:bg-gray-700">
                    <i class="fas fa-users mr-3"></i>
                    <span>Team Members</span>
                </a>
                <a href="#" class="flex items-center p-2 rounded-md hover:bg-gray-700">
                    <i class="fas fa-chart-bar mr-3"></i>
                    <span>Statistics</span>
                </a>
                <a href="#" class="flex items-center p-2 rounded-md hover:bg-gray-700">
                    <i class="fas fa-newspaper mr-3"></i>
                    <span>News</span>
                </a>
                <a href="#" class="flex items-center p-2 rounded-md hover:bg-gray-700">
                    <i class="fas fa-comment mr-3"></i>
                    <span>Testimonials</span>
                </a>
                <a href="{{ route('home') }}" class="flex items-center p-2 rounded-md hover:bg-gray-700" target="_blank">
                    <i class="fas fa-globe mr-3"></i>
                    <span>View Website</span>
                </a>
                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center p-2 rounded-md hover:bg-gray-700">
                        <i class="fas fa-sign-out-alt mr-3"></i>
                        <span>Logout</span>
                    </a>
                </form>
            </nav>
        </aside>

        <!-- Main content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top bar -->
            <header class="flex justify-between items-center p-4 bg-white border-b">
                <div class="md:hidden">
                    <button @click="sidebarOpen = !sidebarOpen">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
                <div>
                    <h1 class="text-xl font-semibold">@yield('title', 'Dashboard')</h1>
                </div>
                <div>
                    <span class="font-semibold">{{ Auth::user()->name }}</span>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>

    @livewireScripts
</body>
</html>
