<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Vote</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class="gradient-bg min-h-screen text-gray-100">
    <div class="flex h-full">
        @include('layouts.sidebar')
        <!-- Main Content -->
        <div class="flex-1 md:ml-64 p-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <div class="flex items-center space-x-4">
                    <button id="mobileMenuButton" class="md:hidden w-10 h-10 rounded-full bg-indigo-600 flex items-center justify-center">
                        <i class="fas fa-bars text-white text-xl"></i>
                    </button>
                    <h1 class="text-2xl font-bold hidden md:block">Election Dashboard</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full text-xs flex items-center justify-center">3</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <span>Admin</span>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
           @include('components.dashboard') 

    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>