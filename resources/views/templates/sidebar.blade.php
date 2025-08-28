<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{ route('dashboard.index') }}"
            class="flex items-center p-2 rounded-lg group hover-scale
            {{ Request::is('dashboard') ? 'bg-gray-900 text-gray-100 dark:bg-gray-500 dark:text-white' : 'text-gray-600 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                <i class="ri-dashboard-line text-xl"></i>
                <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="{{ route('dashboard.election.index') }}"
            class="flex items-center p-2 rounded-lg group hover-scale
            {{ Request::is('dashboard/election') ? 'bg-gray-900 text-gray-100 dark:bg-gray-500 dark:text-white' : 'text-gray-600 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
               <span class="material-symbols-outlined">
                  how_to_vote
               </span>
                <span class="ms-3">Pemilihan</span>
            </a>
         </li>
         <li>
            <a href="{{route('dashboard.candidate.index') }}"
            class="flex items-center p-2 rounded-lg group hover-scale
            {{ Request::is('dashboard/candidate') ? 'bg-gray-900 text-gray-100 dark:bg-gray-700 dark:text-white' : 'text-gray-600 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                <i class="ri-user-line text-xl"></i>
                <span class="ms-3">Kandidat</span>
            </a>
         </li> 
         <li>
            <a href="{{route('dashboard.users.index') }}"
            class="flex items-center p-2 rounded-lg group hover-scale
            {{ Request::is('dashboard/users') ? 'bg-gray-900 text-gray-100 dark:bg-gray-700 dark:text-white' : 'text-gray-600 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                <i class="ri-group-line text-xl"></i>
                <span class="ms-3">Pengguna</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

