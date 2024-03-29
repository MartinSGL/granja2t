<header class="z-10 py-4 bg-white shadow-md">
    <div class="flex items-center h-full px-6 mx-auto">
      <div class=" flex w-full">
         <span class="font-semibold">Bienvenido:</span>&nbsp; <span class="italic capitalize">{{auth()->user()->name}}</span>
      </div>
     
      <ul class="flex flex-row-reverse items-center w-full space-x-6">
        <!-- Profile menu -->
        <li class="relative hidden lg:block">
          <button
            class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
            @click="toggleProfileMenu"
            @keydown.escape="closeProfileMenu"
            aria-label="Account"
            aria-haspopup="true"
          >
            <img
              class="object-cover w-8 h-8 rounded-full"
              src="{{ Auth::user()->profile_photo_url }}"
              alt=""
              aria-hidden="true"
            />
          </button>
          <template x-if="isProfileMenuOpen">
            <ul
              x-transition:leave="transition ease-in duration-150"
              x-transition:leave-start="opacity-100"
              x-transition:leave-end="opacity-0"
              @click.away="closeProfileMenu"
              @keydown.escape="closeProfileMenu"
              class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
              aria-label="submenu"
            >
              <li x-data="{active:'{{Route::currentRouteName()}}'}" class="flex">
                <a
                  :class="{'bg-gray-200': active == 'profile.show'}"
                  class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                  href="{{ route('profile.show') }}"
                >
                  <i class="mr-2 fas fa-user-cog"></i>
                  <span>Perfil</span>
                </a>
              </li>
              <li class="flex">
                 <!-- Authentication -->
                 <form method="POST" class="w-full" action="{{ route('logout') }}">
                  @csrf
                  <a
                    class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                  
                    <i class="mr-2 fas fa-sign-out-alt"></i>
                    <span>Cerrar Sesión</span>
                  </a>
                 </form>
              </li>
            </ul>
          </template>
        </li>
        <!-- Mobile hamburger -->
      <button class="p-1 mr-5 -ml-1 rounded-md lg:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu">
      <svg
        class="w-6 h-6"
        aria-hidden="true"
        fill="currentColor"
        viewBox="0 0 20 20"
      >
        <path
          fill-rule="evenodd"
          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
          clip-rule="evenodd"
        ></path>
      </svg>
    </button>
      </ul>
    </div>
  </header>
