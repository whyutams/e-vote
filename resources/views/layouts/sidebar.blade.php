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
                <a href="/dashboard" 
                class="block px-4 py-3 text-white 
                        {{ request()->is('dashboard') ? 'bg-indigo-700/70' : 'hover:bg-indigo-600/50' }} 
                        transition">
                    <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                </a>

                <div class="px-4 py-2 text-indigo-200 uppercase text-xs font-semibold mt-4">Election</div>

                <a href="/results" 
                class="block px-4 py-3 text-white 
                        {{ request()->is('results') ? 'bg-indigo-700/70' : 'hover:bg-indigo-600/30' }} 
                        transition">
                    <i class="fas fa-poll mr-3"></i> Results
                </a>

                <a href="/candidate" 
                class="block px-4 py-3 text-white 
                        {{ request()->is('candidate*') ? 'bg-indigo-700/70' : 'hover:bg-indigo-600/30' }} 
                        transition">
                    <i class="fas fa-users mr-3"></i> Candidates
                </a>

                <a href="/voters" 
                class="block px-4 py-3 text-white 
                        {{ request()->is('voters*') ? 'bg-indigo-700/70' : 'hover:bg-indigo-600/30' }} 
                        transition">
                    <i class="fas fa-user-shield mr-3"></i> Voters
                </a>

                <div class="px-4 py-2 text-indigo-200 uppercase text-xs font-semibold mt-4">Settings</div>

                <a href="/system" 
                class="block px-4 py-3 text-white 
                        {{ request()->is('system') ? 'bg-indigo-700/70' : 'hover:bg-indigo-600/30' }} 
                        transition">
                    <i class="fas fa-cog mr-3"></i> System
                </a>

                <a href="/profile" 
                class="block px-4 py-3 text-white 
                        {{ request()->is('profile') ? 'bg-indigo-700/70' : 'hover:bg-indigo-600/30' }} 
                        transition">
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