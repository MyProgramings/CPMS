<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('app.Check_Up') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('app.show') }} {{ __('app.Check_Up') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="relative grid grid-cols-6 gap-6 mt-2">
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label for="name" value="{{ $list_checkup->name }}" />
                </div>
            </div>
            <div class="w-full px-0 overflow-hidden mt-7">

                <x-jet-nav-link href="{{ route('list_checkups.index') }}">
                    <x-jet-secondary-button>
                        {{ __('pack') }}
                    </x-jet-secondary-button>
                </x-jet-nav-link>

            </div>
        </div>
    </div>
</x-app-layout>
