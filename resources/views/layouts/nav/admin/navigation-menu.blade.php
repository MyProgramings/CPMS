<nav x-data="{ open: false }" class="bg-gray-800 dark:bg-gray-900 border-y shadow-lg dark:border-gray-500">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>
                <!-- Navigation Links -->
                {{-- @include('layouts.nav.admin.menu.links') --}}
            </div>
            <div class="flex">
                <div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <i class="fa-solid fa-gauge"></i>&nbsp; {{ __('Dashboard') }}
                    </x-jet-nav-link>
                </div>
            </div>
            <div class="hidden sm:flex sm:items-center ltr:sm:ml-6 rtl:sm:mr-6">
                <div class="ltr:ml-3 rtl:mr-3 relative">
                    {{-- @include('layouts.nav.admin.dropdown-nenu-manage.links') --}}
                </div>
            </div>
            <div class="flex">
                @can('viewAny', \App\Models\Patient::class)
                    <div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
                        <x-jet-nav-link href="{{ route('patients.index') }}" :active="request()->routeIs('patients.index')">
                            <i class="fa-solid fa-hospital-user"></i>&nbsp;{{ __('app.Patients') }}
                        </x-jet-nav-link>
                    </div>
                @endcan
            </div>
            <div class="flex">
                @can('viewAny', \App\Models\Inventoris::class)
                    <div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
                        <x-jet-nav-link href="{{ route('inventories.index') }}" :active="request()->routeIs('inventories.index')">
                            {{-- <x-jet-nav-link href="{{ route('inventory_index') }}" :active="request()->routeIs('inventories.index')"> --}}
                            <i class="fa-solid fa-laptop-medical"></i>&nbsp;{{ __('app.Inventory') }}
                        </x-jet-nav-link>
                    </div>
                @endcan
            </div>
            <div class="flex">
                @can('viewAny', \App\Models\User::class)
                    <div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
                        <x-jet-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                            <i class="fa-regular fa-user">&nbsp; </i> {{ __('app.Users') }}
                        </x-jet-nav-link>
                    </div>
                @endcan
            </div>
            <div class="hidden sm:flex sm:items-center ltr:sm:ml-6 rtl:sm:mr-6">
                <div class="ltr:ml-3 rtl:mr-3 relative">
                    @if (Auth::user()->role_id == 1)
                        {{-- @include('layouts.nav.admin.dropdown-nenu.links') --}}
                    @endif
                </div>
            </div>

            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="flex"></div>
            <div class="hidden sm:flex sm:items-center">
                <div class="ltr:ml-3 rtl:mr-3 relative">
                    {{-- @include('layouts.nav.admin.dropdown-language.links') --}}
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center">

                <x-button-dark-mode />

                <!-- Settings Dropdown -->
                <div class="ltr:ml-3 rtl:mr-3 relative">
                    <x-jet-dropdown align="{{ app()->getLocale() === 'ar' ? 'left' : 'right' }}" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 dark:focus:border-gray-700 transition">
                                    @if (Auth::user()->profile_photo_path)
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="/storage/{{ Auth::user()->profile_photo_path }}"
                                            alt="{{ Auth::user()->name }}" />
                                    @else
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    @endif
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ltr:ml-2 rtl:mr-2 ltr:-mr-0.5 rtl:-ml-0.5 h-4 w-4"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            @include('layouts.nav.admin.dropdown.links')
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="ltr:-mr-2 rtl:-ml-2 flex items-center sm:hidden">

                <x-button-dark-mode />

                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-700 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-600 focus:text-gray-500 dark:focus:text-gray-300 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        @include('layouts.nav.admin.menu.responsive-link')

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-700">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="ltr:mr-3 rtl:ml-3">
                        @if (Auth::user()->profile_photo_path)
                        <img class="h-8 w-8 rounded-full object-cover" src="/storage/{{ Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" />
                    @else
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    @endif
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800 dark:text-gray-400">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500 dark:text-gray-600">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                @include('layouts.nav.admin.dropdown.responsive-link')
            </div>
        </div>
    </div>
</nav>
<script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
{{-- <script>
    $(document).on('click', '#switch_s', function() {
        console.log('Exit file')
        var $path = 'ar';
        if ($path) {
            console.log($path)
            $.ajax({
                url: "{{ url('Translate') }}",
                type: "get",
                data: {
                    'path': $path
                },
                success: function() {
                    console.log('ok')
                },
                error: function() {
                    console.log('Not ok')
                }
            });
        } else {
            console.log('no data')
        }
    });
</script> --}}
