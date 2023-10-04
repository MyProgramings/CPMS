<style>
    .dropdown-menu {
        position: absolute;
        z-index: 1000;
        display: none;
        min-width: 10rem;
        padding: 0.5rem 0;
        margin: 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 0.25rem;
        padding-left: 5px !important;
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.25rem 1rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        text-decoration: none;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h3>
            {{ __('app.Users') }}
        </h3>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('app.Users') }}</h3>
                </div>
                <div class="ml-4">
                    <x-jet-secondary-button id="print_button">
                        <i class="fa-solid fa-print"></i>&nbsp;
                        {{ __('app.print') }}
                    </x-jet-secondary-button>
                </div>
                <div class="ml-4">
                    @can('create', \App\Models\User::class)
                        <x-jet-nav-link href="{{ route('users.create') }}">
                            <x-jet-secondary-button class="px-2">
                                <x-svg.svg-plus class="w-6 h-6" />
                                {{ __('Add') }} {{ __('user.user') }}
                            </x-jet-secondary-button>
                        </x-jet-nav-link>
                    @endcan
                </div>
            </div>
            <form action="{{ Route('users.index') }}" method="GET">
                <div class="relative grid grid-cols-6 gap-6 mt-2 ">
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <x-jet-label for="search" value="{{ __('app.search') }}: {{ __('app.name') }}, {{ __('user.username') }} " />
                        <x-jet-input id="search" name="search" type="text" value="{{ request('search') }}"
                        class="block w-full mt-1 ring-1 ring-blue-200" autocomplete="off" />
                        @include('vendor.jetstream.components.autocomplate-users')
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="w-full px-0 overflow-hidden" id="div_to_print">
        <div id="photo">
            <img src="{{ URL::asset('logocenter.PNG') }}" style="width: 100%; height: 180px;">
        </div>
        <div class="w-full border-l overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-sm font-semibold text-gray-500 border-y ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 bg-blue-200 dark:bg-gray-700/30">
                        <th class="w-10 px-2 py-3 text-center">{{ __('app.id') }}</th>
                        <th class="px-4 py-3 text-center"><span>{{ __('user.profile_photo_url') }}</span></th>
                        <th class="px-4 py-3 text-center"><span>{{ __('user.name') }}</span></th>
                        <th class="px-2 py-3 text-center">{{ __('user.username') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('user.email') }}</th>
                        <th class="w-10 px-2 py-3 text-center">{{ __('user.role') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('app.created_at') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('app.updated_at') }}</th>
                        <th class="px-2 py-3 text-center" id="action_s">{{ __('app.actions') }}</th>
                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                @forelse ($users as $user)
                    <tbody class="border-l bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                        <tr @if ($loop->even) class="text-sm text-gray-600 dark:text-gray-400 text-gray-800 dark:text-gray-400 bg-gray-100 dark:bg-gray-800 hover:dark:bg-gray-700" @endif
                            class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-400 hover:bg-gray-100 hover:dark:bg-gray-700">
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center text-xx dark:text-gray-400">
                                {{ ++$i }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                <div class="flex items-center text-sm">
                                    <div
                                        class="relative hidden w-10 h-10 shadow-md rounded-full ltr:mr-3 rtl:ml-3 md:block">
                                        @if ($user->profile_photo_path)
                                            <img class="object-cover w-full h-full rounded-full" src="/storage/{{ $user->profile_photo_path }}" alt="..." />
                                            <div class="absolute bottom-0 w-3 h-3 {{ $user->isOnline() ? 'bg-green-500' : 'bg-gray-500' }} rounded-full ltr:right-0 rtl:left-0 ltr:ml-1 rtl:mr-1">
                                            </div>
                                            <div class=" {{ $user->isOnline() ? 'animate-ping absolute bottom-0 w-3 h-3 bg-green-500' : 'bg-gray-500' }} rounded-full ltr:right-0 rtl:left-0 ltr:ml-1 rtl:mr-1">
                                            </div>
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        @else
                                            <img class="object-cover w-full h-full rounded-full" src="{{ $user->profile_photo_url }}" alt="..." />
                                            <div class="absolute bottom-0 w-3 h-3 {{ $user->isOnline() ? 'bg-green-500' : 'bg-gray-500' }} rounded-full ltr:right-0 rtl:left-0 ltr:ml-1 rtl:mr-1"></div>
                                            <div class=" {{ $user->isOnline() ? 'animate-ping absolute bottom-0 w-3 h-3 bg-green-500' : 'bg-gray-500' }} rounded-full ltr:right-0 rtl:left-0 ltr:ml-1 rtl:mr-1">
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $user->name }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $user->username }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $user->email }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $user->role->name }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $user->created_at->diffForHumans() }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $user->updated_at->diffForHumans() }}
                            </td>
                            <td class="font-semibold text-gray-600 px-4 py-2">
                                <div class="flex items-center justify-between gap-1 text-sm text-center dark:text-gray-400"
                                    id="action_Button">
                                    @can('update', $user)
                                        <x-jet-nav-link href="{{ route('users.edit', $user->id) }}">
                                            <x-jet-button wire:click="selectedItem('update','hjhjh')" class="px-2">
                                                <x-svg.svg-update class="w-5 h-5" />
                                            </x-jet-button>
                                        </x-jet-nav-link>
                                    @endcan
                                    @can('view', $user)
                                        <x-jet-nav-link href="{{ route('users.show', $user->id) }}">
                                            <x-jet-button wire:click="selectedItem('show','hjjjjhj')" class="px-2">
                                                <x-svg.svg-show class="w-5 h-5" />
                                            </x-jet-button>
                                        </x-jet-nav-link>
                                    @endcan
                                    @can('delete', $user)
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                            style="margin-bottom: 0px;">
                                            @method('DELETE')
                                            @csrf
                                            <x-jet-danger-button type="submit"
                                                onclick="return confirm('Are you shur to delete')"
                                                class="px-2 bg-red-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
                                                <x-svg.svg-delete class="w-5 h-5" />
                                            </x-jet-danger-button>
                                        </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-3 text-sm text-center text-gray-700 dark:text-gray-400">
                            {{ __('app.No Data') }}</td>
                    </tr>
                @endforelse
            </table>
        </div>
        @if (!empty($users))
            <div class="px-4 py-3 border-t dark:border-gray-700">
                {{ $users->links() }}
            </div>
        @endif
    </div>
</x-app-layout>
