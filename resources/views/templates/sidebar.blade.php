<aside id="logo-sidebar"
   class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 flex flex-col justify-between"
   aria-label="Sidebar">

   {{-- Bagian menu --}}
   <div class="h-full px-3 pb-4 overflow-y-auto">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{ route('dashboard.index') }}" class="flex items-center p-2 rounded-lg group hover-scale
               {{ Request::is('dashboard') ? 'bg-blue-500 text-gray-100' : 'text-gray-600 hover:bg-gray-100' }}">
               <i class="ri-dashboard-line text-xl"></i>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="{{ route('dashboard.elections.index') }}" class="flex items-center p-2 rounded-lg group hover-scale
               {{ Request::is('dashboard/elections') ? 'bg-blue-500 text-gray-100' : 'text-gray-600 hover:bg-gray-100' }}">
               <span class="material-symbols-outlined">how_to_vote</span>
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
         <hr class="h-px my-8 bg-gray-200 border-0">
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

   {{-- Bagian info akun --}}
   <div class="border-t border-gray-200 p-4 flex items-center space-x-3">
      @php
         $user = auth()->user();
         // Ambil huruf pertama dari fullname
         $initial = strtoupper(substr($user->fullname, 0, 1));
      @endphp

      <div class="w-10 h-10 flex items-center justify-center bg-blue-500 text-white rounded-full text-lg font-semibold">
         {{ $initial }}
      </div>

      <div>
         <p class="text-gray-700 font-semibold">{{ $user->fullname }}</p>
         <p class="text-gray-500 text-sm capitalize">{{ $user->role }}</p>
      </div>
   </div>
</aside>
