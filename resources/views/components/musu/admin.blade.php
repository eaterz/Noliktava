<!DOCTYPE html>
<html lang="en" class="bg-gray-100 h-full font-[sans-serif]">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/pop_up.js', 'resources/js/remove2.js'])




</head>

<body>
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                @if(Auth::user()->usertype == 'admin')
                                    <x-musu.nav-link href="/admin/dashboard" :active="request()->is('admin/dashboard')">Dashboard</x-musu.nav-link>
                                    <x-musu.nav-link href="/admin/users" :active="request()->is('admin/users')">User</x-musu.nav-link>
                                    <x-musu.nav-link href="/admin/activity" :active="request()->is('admin/activity')">Activity</x-musu.nav-link>
                                @elseif(Auth::user()->usertype == 'noliktava')
                                    <x-musu.nav-link href="/noliktava/dashboard" :active="request()->is('noliktava/dashboard')">Products</x-musu.nav-link>
                                    <x-musu.nav-link href="/noliktava/orders" :active="request()->is('noliktava/orders')">Orders</x-musu.nav-link>
                                    <x-musu.nav-link href="/noliktava/activity" :active="request()->is('noliktava/activity')">Activity</x-musu.nav-link>
                                @elseif(Auth::user()->usertype == 'plaukti')
                                    <x-musu.nav-link href="/plaukti/dashboard" :active="request()->is('plaukti/dashboard')">Dashboard</x-musu.nav-link>
                                    <x-musu.nav-link href="/plaukti/activity" :active="request()->is('plaukti/activity')">Activity</x-musu.nav-link>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">


                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <form method="POST" action="{{ route('logout') }}">
                                     @csrf
                                 <button type="submit" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"> <!-- Log out pogas stils pielāgots -->
                                Log Out
                                 </button>
                                </form>

                                </form>
                            </div>


                            <!--
                              Dropdown menu, show/hide based on menu state.

                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                        </div>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button id="mobile-menu-button" type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="md:hidden overflow-hidden transition-all duration-300 ease-in-out max-h-0" id="mobile-menu">
                    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        @if(Auth::user()->usertype == 'admin')
                            <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Dashboard</a>
                            <a href="/admin/users" class="{{ request()->is('admin/users') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">User</a>
                            <a href="/admin/activity" class="{{ request()->is('admin/activity') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Activity</a>
                        @elseif(Auth::user()->usertype == 'noliktava')
                            <a href="/noliktava/dashboard" class="{{ request()->is('noliktava/dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Products</a>
                            <a href="/noliktava/orders" class="{{ request()->is('noliktava/orders') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Orders</a>
                            <a href="/noliktava/activity" class="{{ request()->is('noliktava/activity') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Activity</a>
                        @elseif(Auth::user()->usertype == 'plaukti')
                            <a href="/plaukti/dashboard" class="{{ request()->is('plaukti/dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Dashboard</a>
                            <a href="/plaukti/activity" class="{{ request()->is('plaukti/activity') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Activity</a>
                        @endif
                        <div class="relative ml-3">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
    </nav>
    {{$slot}}
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
