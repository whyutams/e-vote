<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern e-Voting Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        <!-- Sidebar -->
        <div class="sidebar w-64 fixed h-full hidden md:block">
            <div class="p-4 flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center">
                    <i class="fas fa-vote-yea text-white text-xl"></i>
                </div>
                <h1 class="text-xl font-bold">eVote Admin</h1>
            </div>
            <nav class="mt-8">
                <div class="px-4 py-2 text-indigo-200 uppercase text-xs font-semibold">Main</div>
                <a href="#" class="block px-4 py-3 text-white bg-indigo-700/50 hover:bg-indigo-600/50 transition">
                    <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                </a>
                <div class="px-4 py-2 text-indigo-200 uppercase text-xs font-semibold mt-4">Election</div>
                <a href="#" class="block px-4 py-3 text-white hover:bg-indigo-600/30 transition">
                    <i class="fas fa-poll mr-3"></i> Results
                </a>
                <a href="#" class="block px-4 py-3 text-white hover:bg-indigo-600/30 transition">
                    <i class="fas fa-users mr-3"></i> Candidates
                </a>
                <a href="#" class="block px-4 py-3 text-white hover:bg-indigo-600/30 transition">
                    <i class="fas fa-user-shield mr-3"></i> Voters
                </a>
                <div class="px-4 py-2 text-indigo-200 uppercase text-xs font-semibold mt-4">Settings</div>
                <a href="#" class="block px-4 py-3 text-white hover:bg-indigo-600/30 transition">
                    <i class="fas fa-cog mr-3"></i> System
                </a>
                <a href="#" class="block px-4 py-3 text-white hover:bg-indigo-600/30 transition">
                    <i class="fas fa-user-cog mr-3"></i> Profile
                </a>
            </nav>
        </div>


        <!-- Mobile sidebar -->
        <div id="mobileSidebar" class="sidebar w-64 fixed h-full left-0 top-0 transform -translate-x-full transition-transform duration-300 z-40 md:hidden">
            <div class="p-4 flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center">
                    <i class="fas fa-vote-yea text-white text-xl"></i>
                </div>
                <h1 class="text-xl font-bold">eVote Admin</h1>
            </div>
            <nav class="mt-8">
                <div class="px-4 py-2 text-indigo-200 uppercase text-xs font-semibold">Main</div>
                <a href="#" class="block px-4 py-3 text-white bg-indigo-700/50 hover:bg-indigo-600/50 transition">
                    <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                </a>
                <div class="px-4 py-2 text-indigo-200 uppercase text-xs font-semibold mt-4">Election</div>
                <a href="#" class="block px-4 py-3 text-white hover:bg-indigo-600/30 transition">
                    <i class="fas fa-poll mr-3"></i> Results
                </a>
                <a href="#" class="block px-4 py-3 text-white hover:bg-indigo-600/30 transition">
                    <i class="fas fa-users mr-3"></i> Candidates
                </a>
                <a href="#" class="block px-4 py-3 text-white hover:bg-indigo-600/30 transition">
                    <i class="fas fa-user-shield mr-3"></i> Voters
                </a>
                <div class="px-4 py-2 text-indigo-200 uppercase text-xs font-semibold mt-4">Settings</div>
                <a href="#" class="block px-4 py-3 text-white hover:bg-indigo-600/30 transition">
                    <i class="fas fa-cog mr-3"></i> System
                </a>
                <a href="#" class="block px-4 py-3 text-white hover:bg-indigo-600/30 transition">
                    <i class="fas fa-user-cog mr-3"></i> Profile
                </a>
            </nav>
        </div>

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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="glass-card p-6 hover-scale">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-indigo-200">Total Votes</p>
                            <h3 class="text-2xl font-bold">12,456</h3>
                            <p class="text-xs text-green-400 mt-1">+12% from yesterday</p>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-indigo-500/30 flex items-center justify-center">
                            <i class="fas fa-vote-yea text-indigo-300 text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="glass-card p-6 hover-scale">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-indigo-200">Registered Voters</p>
                            <h3 class="text-2xl font-bold">24,890</h3>
                            <p class="text-xs text-green-400 mt-1">98% verified</p>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-green-500/30 flex items-center justify-center">
                            <i class="fas fa-user-check text-green-300 text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="glass-card p-6 hover-scale">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-indigo-200">Candidates</p>
                            <h3 class="text-2xl font-bold">8</h3>
                            <p class="text-xs text-yellow-400 mt-1">3 parties</p>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-purple-500/30 flex items-center justify-center">
                            <i class="fas fa-users text-purple-300 text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="glass-card p-6 hover-scale">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-indigo-200">Voting Progress</p>
                            <h3 class="text-2xl font-bold">50.2%</h3>
                            <p class="text-xs text-blue-400 mt-1">12h 34m remaining</p>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-blue-500/30 flex items-center justify-center">
                            <i class="fas fa-clock text-blue-300 text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                <div class="glass-card p-6 lg:col-span-2 hover-scale">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold">Vote Distribution</h3>
                        <select class="bg-indigo-600/30 text-sm rounded px-3 py-1">
                            <option>Presidential</option>
                            <option>Legislative</option>
                            <option>Local</option>
                        </select>
                    </div>
                    <canvas id="voteChart" height="250"></canvas>
                </div>
                <div class="glass-card p-6 hover-scale">
                    <h3 class="font-semibold mb-4">Voting Timeline</h3>
                    <canvas id="timelineChart" height="250"></canvas>
                </div>
            </div>

            <!-- Recent Activity and Top Candidates -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="glass-card p-6 lg:col-span-2 hover-scale">
                    <h3 class="font-semibold mb-4">Recent Votes</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="text-left text-sm text-indigo-200 border-b border-indigo-500/30">
                                    <th class="pb-2">Voter ID</th>
                                    <th class="pb-2">Candidate</th>
                                    <th class="pb-2">Time</th>
                                    <th class="pb-2">Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-indigo-500/10 hover:bg-indigo-500/10">
                                    <td class="py-3">VTR-7845</td>
                                    <td>John Smith</td>
                                    <td>10:24 AM</td>
                                    <td>District 1</td>
                                </tr>
                                <tr class="border-b border-indigo-500/10 hover:bg-indigo-500/10">
                                    <td class="py-3">VTR-6521</td>
                                    <td>Sarah Johnson</td>
                                    <td>10:18 AM</td>
                                    <td>District 3</td>
                                </tr>
                                <tr class="border-b border-indigo-500/10 hover:bg-indigo-500/10">
                                    <td class="py-3">VTR-3987</td>
                                    <td>Michael Chen</td>
                                    <td>10:12 AM</td>
                                    <td>District 2</td>
                                </tr>
                                <tr class="border-b border-indigo-500/10 hover:bg-indigo-500/10">
                                    <td class="py-3">VTR-2456</td>
                                    <td>Emma Wilson</td>
                                    <td>10:05 AM</td>
                                    <td>District 1</td>
                                </tr>
                                <tr class="hover:bg-indigo-500/10">
                                    <td class="py-3">VTR-1893</td>
                                    <td>David Brown</td>
                                    <td>09:58 AM</td>
                                    <td>District 4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 text-center">
                        <button class="text-indigo-300 hover:text-white text-sm">View All Votes →</button>
                    </div>
                </div>
                <div class="glass-card p-6 hover-scale">
                    <h3 class="font-semibold mb-4">Top Candidates</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3 p-3 bg-indigo-600/20 rounded-lg">
                            <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center">
                                <span class="font-bold">1</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium">John Smith</h4>
                                <div class="flex items-center justify-between text-xs">
                                    <span>4,892 votes</span>
                                    <span class="text-green-400">39.2%</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3 p-3 bg-indigo-600/10 rounded-lg">
                            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center">
                                <span class="font-bold">2</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium">Sarah Johnson</h4>
                                <div class="flex items-center justify-between text-xs">
                                    <span>3,745 votes</span>
                                    <span class="text-blue-400">30.1%</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3 p-3 bg-indigo-600/10 rounded-lg">
                            <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center">
                                <span class="font-bold">3</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium">Michael Chen</h4>
                                <div class="flex items-center justify-between text-xs">
                                    <span>2,156 votes</span>
                                    <span class="text-green-400">17.3%</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3 p-3 bg-indigo-600/10 rounded-lg">
                            <div class="w-10 h-10 rounded-full bg-yellow-500 flex items-center justify-center">
                                <span class="font-bold">4</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium">Emma Wilson</h4>
                                <div class="flex items-center justify-between text-xs">
                                    <span>1,023 votes</span>
                                    <span class="text-yellow-400">8.2%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <button class="text-indigo-300 hover:text-white text-sm">View All Candidates →</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        const mobileMenu = document.getElementById('mobileSidebar');
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        
        mobileMenuButton.addEventListener('click', function(e) {
            e.stopPropagation();
            mobileMenu.classList.remove('-translate-x-full');
        });
        
        document.addEventListener('click', function() {
            mobileMenu.classList.add('-translate-x-full');
        });
        
        // Prevent menu from closing when clicking inside it
        mobileMenu.addEventListener('click', function(e) {
            e.stopPropagation();
        });

        // Vote Distribution Chart
        const voteCtx = document.getElementById('voteChart').getContext('2d');
        const voteChart = new Chart(voteCtx, {
            type: 'bar',
            data: {
                labels: ['John Smith', 'Sarah Johnson', 'Michael Chen', 'Emma Wilson', 'David Brown', 'Others'],
                datasets: [{
                    label: 'Votes',
                    data: [4892, 3745, 2156, 1023, 876, 764],
                    backgroundColor: [
                        'rgba(139, 92, 246, 0.7)',
                        'rgba(59, 130, 246, 0.7)',
                        'rgba(16, 185, 129, 0.7)',
                        'rgba(234, 179, 8, 0.7)',
                        'rgba(239, 68, 68, 0.7)',
                        'rgba(156, 163, 175, 0.7)'
                    ],
                    borderColor: [
                        'rgba(139, 92, 246, 1)',
                        'rgba(59, 130, 246, 1)',
                        'rgba(16, 185, 129, 1)',
                        'rgba(234, 179, 8, 1)',
                        'rgba(239, 68, 68, 1)',
                        'rgba(156, 163, 175, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.7)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.7)'
                        }
                    }
                }
            }
        });

        // Voting Timeline Chart
        const timelineCtx = document.getElementById('timelineChart').getContext('2d');
        const timelineChart = new Chart(timelineCtx, {
            type: 'line',
            data: {
                labels: ['6 AM', '8 AM', '10 AM', '12 PM', '2 PM', '4 PM', '6 PM', '8 PM'],
                datasets: [{
                    label: 'Votes per hour',
                    data: [120, 450, 780, 1020, 1450, 1800, 2100, 2350],
                    fill: true,
                    backgroundColor: 'rgba(99, 102, 241, 0.2)',
                    borderColor: 'rgba(99, 102, 241, 1)',
                    tension: 0.4,
                    pointBackgroundColor: 'rgba(99, 102, 241, 1)'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.7)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.7)'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>