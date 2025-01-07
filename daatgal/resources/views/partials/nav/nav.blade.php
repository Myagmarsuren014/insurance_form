<nav x-data="{ open: false }" class="top-0 bg-primary_ld">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 justify-between ">
          <div class="flex">
            <div class="flex flex-shrink-0 items-center">
              <a href="/">
                <img src="/proger-logo5.png" alt="Proger" class="h-16 cursor-pointer resize-none">
              </a>
            </div>
            @include('partials.nav.menu_main')
          </div>
          <div class="hidden sm:ml-6 sm:flex sm:items-center">
            @auth
              @if (!empty(session('profiles.person.id')))
                @include('partials.nav.menu_profile')
              @else
                @include('partials.nav.menu_account')
              @endif
            @else 

              <a href="{{route('register')}}" class=" text-white hover:border-secondary_ld hover:text-secondary_ld inline-flex items-center px-2 pt-1 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
                Бүртгүүлэх
              </a>

              <a href="{{route('login')}}" class=" text-white hover:border-secondary_ld hover:text-secondary_ld inline-flex items-center px-1 pt-1 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                </svg>
                Нэвтрэх
              </a>
            @endif
          </div>
          @include('partials.nav.mobile.menu_buttons')
        </div>
      </div>

      <div x-description="Mobile menu, show/hide based on menu state." class="sm:hidden" id="mobile-menu" x-show="open" style="display: none;">
        @include('partials.nav.mobile.menu')
        
      </div>
    </nav>