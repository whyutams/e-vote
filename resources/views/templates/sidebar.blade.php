<aside id="logo-sidebar"
   class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0"
   aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-whit">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{ route('dashboard.index') }}" class="flex items-center p-2 rounded-lg group hover-scale
            {{ Request::is('dashboard') ? 'bg-blue-500 text-gray-100' : 'text-gray-600 hover:bg-gray-100' }}">
               <i class="ri-dashboard-line text-xl"></i>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="{{ route('dashboard.election.index') }}" class="flex items-center p-2 rounded-lg group hover-scale
            {{ Request::is('dashboard/election') ? 'bg-blue-500 text-gray-100' : 'text-gray-600 hover:bg-gray-100' }}">
               <span class="material-symbols-outlined">
                  how_to_vote
               </span>
               <span class="ms-3">Pemilihan</span>
            </a>
         </li>
         <li>
            @if(auth()->user()->role === 'superadmin')
               <a href="{{ route('dashboard.admins.index') }}" 
                  class="flex items-center p-2 rounded-lg group hover-scale
                  {{ Request::is('dashboard/admins') ? 'bg-blue-500 text-gray-100' : 'text-gray-600 hover:bg-gray-100' }}">
                  <i class="ri-group-line text-xl"></i>
                  <span class="ms-3">Admin</span>
               </a>
            @endif
         </li>
         <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-300">
         <li>
            <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Yakin ingin logout?')">
               @csrf
               <button type="submit"
                  class="w-full text-left flex items-center p-2 rounded-lg group hover-scale text-gray-600 hover:bg-gray-100">
                  <i class="ri-logout-box-line text-xl"></i>
                  <span class="ms-3">Logout</span>
               </button>
            </form>
         </li>
      </ul>
   </div>
</aside>