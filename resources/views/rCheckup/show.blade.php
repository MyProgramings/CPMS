<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Show Users') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-gray-600 ltr:text-left rtl:text-right dark:text-gray-400">
                        {{ __('User Form') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="relative grid grid-cols-6 gap-6 mt-2">
                <div class="w-20 h-20 bg-gray-200 dark:bg-gray-700 rounded-full">

                </div>
                <div class="col-span-3 md:col-span-2 lg:col-span-1">
                    <x-jet-label for="name" value="{{ 'fdfd' }}" />
                </div>

                <div class="col-span-3 md:col-span-2 lg:col-span-1">
                    <x-jet-label for="username" value="{{ 'dffd' }}" />
                </div>

                <div class="col-span-3 md:col-span-2 lg:col-span-1">
                    <x-jet-label for="email" value="{{ 'dffd' }}" />
                </div>

                <div class="col-span-1 md:col-span-2">
                    <x-jet-label for="role_id" value="{{ 'dfss' }}" />
                </div>
            </div>
            <div class="w-full px-0 overflow-hidden mt-7">
                <x-jet-nav-link href="{{ route('r_checkups.index') }}">
                    <x-jet-secondary-button>
                        {{ __('pack') }}
                    </x-jet-secondary-button>
                </x-jet-nav-link>
            </div>
        </div>
    </div>
</x-app-layout>
