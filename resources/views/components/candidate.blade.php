<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern e-Voting Admin Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/app.css')
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
        }
        .sidebar {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        .gradient-bg {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #a855f7 100%);
        }
        .hover-scale {
            transition: all 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.03);
        }
    </style>
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

            <!-- Candidates Carousel -->
           <div class="mb-8">
    <!-- Header -->
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Featured Candidates</h2>
        <div class="flex space-x-2">
            <button class="carousel-prev w-8 h-8 rounded-full bg-indigo-600/30 flex items-center justify-center hover:bg-indigo-600/50 transition">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="carousel-next w-8 h-8 rounded-full bg-indigo-600/30 flex items-center justify-center hover:bg-indigo-600/50 transition">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- Frame (fixed) -->
<!-- Frame -->
<div class="relative overflow-hidden">
    <!-- Cards grid -->
    <div class="candidates-carousel 
                grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 
                gap-6">
        
        <!-- Candidate 1 -->
        <div class="glass-card p-6 hover-scale">
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center">
                    <i class="fas fa-user text-white text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-bold">John Smith</h3>
                    <p class="text-sm text-indigo-200">Progressive Party</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm">Votes</span>
                    <span class="font-bold">4,892</span>
                </div>
                <div class="w-full bg-indigo-600/20 rounded-full h-2">
                    <div class="bg-gradient-to-r from-purple-500 to-indigo-600 h-2 rounded-full" style="width: 39.2%"></div>
                </div>
            </div>
            <button class="mt-4 w-full py-2 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-lg text-sm font-medium hover:opacity-90 transition">
                View Profile
            </button>
        </div>
        <div class="glass-card p-6 hover-scale">
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center">
                    <i class="fas fa-user text-white text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-bold">John Smith</h3>
                    <p class="text-sm text-indigo-200">Progressive Party</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm">Votes</span>
                    <span class="font-bold">4,892</span>
                </div>
                <div class="w-full bg-indigo-600/20 rounded-full h-2">
                    <div class="bg-gradient-to-r from-purple-500 to-indigo-600 h-2 rounded-full" style="width: 39.2%"></div>
                </div>
            </div>
            <button class="mt-4 w-full py-2 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-lg text-sm font-medium hover:opacity-90 transition">
                View Profile
            </button>
        </div>
        <div class="glass-card p-6 hover-scale">
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center">
                    <i class="fas fa-user text-white text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-bold">John Smith</h3>
                    <p class="text-sm text-indigo-200">Progressive Party</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm">Votes</span>
                    <span class="font-bold">4,892</span>
                </div>
                <div class="w-full bg-indigo-600/20 rounded-full h-2">
                    <div class="bg-gradient-to-r from-purple-500 to-indigo-600 h-2 rounded-full" style="width: 39.2%"></div>
                </div>
            </div>
            <button class="mt-4 w-full py-2 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-lg text-sm font-medium hover:opacity-90 transition">
                View Profile
            </button>
        </div>
        <div class="glass-card p-6 hover-scale">
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center">
                    <i class="fas fa-user text-white text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-bold">John Smith</h3>
                    <p class="text-sm text-indigo-200">Progressive Party</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm">Votes</span>
                    <span class="font-bold">4,892</span>
                </div>
                <div class="w-full bg-indigo-600/20 rounded-full h-2">
                    <div class="bg-gradient-to-r from-purple-500 to-indigo-600 h-2 rounded-full" style="width: 39.2%"></div>
                </div>
            </div>
            <button class="mt-4 w-full py-2 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-lg text-sm font-medium hover:opacity-90 transition">
                View Profile
            </button>
        </div>
        <div class="glass-card p-6 hover-scale">
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center">
                    <i class="fas fa-user text-white text-2xl"></i>
                </div>
                <div>
                    <h3 class="font-bold">John Smith</h3>
                    <p class="text-sm text-indigo-200">Progressive Party</p>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm">Votes</span>
                    <span class="font-bold">4,892</span>
                </div>
                <div class="w-full bg-indigo-600/20 rounded-full h-2">
                    <div class="bg-gradient-to-r from-purple-500 to-indigo-600 h-2 rounded-full" style="width: 39.2%"></div>
                </div>
            </div>
            <button class="mt-4 w-full py-2 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-lg text-sm font-medium hover:opacity-90 transition">
                View Profile
            </button>
        </div>

        <!-- Candidate 2,3,4,5 dst -->
    </div>
</div>


</div>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}">
    </script>
</body>
</html>