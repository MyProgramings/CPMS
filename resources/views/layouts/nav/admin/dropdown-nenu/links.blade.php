<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-jet-dropdown-menu>
        <x-slot name="header">
            <x-jet-nav-link>
                <i class="fa-solid fa-gear"></i>&nbsp;{{ __('app.Setting') }}
            </x-jet-nav-link>
        </x-slot>
        <x-slot name="content">
            <!-- Account Management -->
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('app.Manage') }}
            </div>
            <x-jet-dropdown-link href="{{ route('backup') }}">
                <i class="fa-solid fa-database"></i>&nbsp;{{ __('app.Add_backup') }}
            </x-jet-dropdown-link>
            <div class="border-t border-gray-100"></div>
            <x-jet-dropdown-link href="{{ route('create_restore') }}">
                <i class="fa-solid fa-server"></i>&nbsp;{{ __('app.Restore_backup') }}
                {{-- <input type="file" class="form-control w-25 mt-3" name="database_path" id="db-path"/> --}}

            </x-jet-dropdown-link>
        </x-slot>
    </x-jet-dropdown-menu>
</div>
