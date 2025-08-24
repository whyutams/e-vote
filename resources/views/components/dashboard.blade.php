@extends('layouts.app')

@section('content')
     <div class="flex-1 md:ml-64 p-6">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="glass-card p-6 hover-scale">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-indigo-200">Total Votes</p>
                            <h3 class="text-2xl font-bold">12,456</h3>
                            <p class="text-xs text-red-400 mt-1">+12% from yesterday</p>
                        </div>
                        <div class="w-12 h-12 rounded-full bg-red-500/30 flex items-center justify-center">
                            <i class="fas fa-vote-yea text-red-300 text-xl"></i>
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
                        <div class="w-12 h-12 rounded-full bg-yellow-500/30 flex items-center justify-center">
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
@endsection