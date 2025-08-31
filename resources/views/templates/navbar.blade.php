<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
          type="button"
          class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
          <span class="sr-only">Open sidebar</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
              d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
          </svg>
        </button>
        <a href="/#" class="flex md:me-24 space-x-4">
          <div class="mt-1">
            <i class="ri-bar-chart-2-fill text-white bg-blue-500 p-2 rounded-md"></i>
          </div>
          <span class="text-center text-xl sm:text-2xl font-extrabold drop-shadow-lg">Vitely</span>
        </a>
      </div>

      @auth
        @if (Auth::user()->role == \App\models\User::ROLE_USER)
          <div id="navbar-dropdown">
            <button 
                id="dropdownNavbarLink" 
                data-dropdown-toggle="dropdownNavbar" 
                class="flex items-center justify-between font-medium w-full py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 hover:bg-transparent text-lg border-0 hover:text-blue-700 p-0">
                {{ Auth::user()->username ??  Auth::user()->fullname }}
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <!-- Dropdown menu -->
            
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
              
                <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Yakin ingin logout?')">
                  @csrf
                  
                <div class="py-1">
                  <button type="submit" class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-100 w-full">Logout</button>
                </div>

                </form>
            </div>
          </div>
        @endif
      @endauth
    </div>
  </div>
</nav>