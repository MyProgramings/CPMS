<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('app.Users') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300">{{ __('app.show') }}
                        {{ __('app.Users') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="relative grid grid-cols-6 gap-6 mt-2">
                <div class="col-span-2 md:col-span-4 lg:col-span-1 lg:row-span-3 order-last lg:order-none">
                    <div class="flex flex-row items-center justify-center">
                        <div class="relative mt-4">
                            <div class="w-20 h-20 bg-gray-200 dark:bg-gray-700 rounded-full">
                                @if ($user->profile_photo_path)
                                    <img src="/storage/{{ $user->profile_photo_path }}"
                                        class="object-cover w-20 h-20 rounded-full">
                                @else
                                    <img src="{{ $user->profile_photo_url }}"
                                        class="object-cover w-20 h-20 rounded-full">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-2">
                    <div
                        class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div
                            class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('user.name') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $user->name }}</div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div
                        class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div
                            class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('user.username') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $user->username }}</div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2 lg:col-span-2">
                    <div
                        class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div
                            class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('user.email') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $user->email }}</div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div
                        class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div
                            class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('app.created_at') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $user->created_at }}</div>
                    </div>
                </div>

                @if ($user->created_at != $user->updated_at)
                    <div class="col-span-1 md:col-span-2 lg:col-span-1">
                        <div
                            class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                            <div
                                class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                {{ __('app.updated_at') }}</div>
                            <div class=" text-sm font-bold z-10">{{ $user->updated_at }}</div>
                        </div>
                    </div>
                @endif

                <div class="col-span-1 md:col-span-2 lg:col-span-2">
                    <div
                        class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div
                            class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('user.role') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $user->role->name }}</div>
                    </div>
                </div>
            </div>
            <div class="w-full px-0 overflow-hidden mt-7">
                <x-jet-nav-link href="{{ route('users.index') }}">
                    <x-jet-secondary-button>
                        {{ __('pack') }}
                    </x-jet-secondary-button>
                </x-jet-nav-link>
            </div>
        </div>
    </div>
</x-app-layout>
