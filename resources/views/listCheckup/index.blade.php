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
                        {{ __('app.Check_Up') }}</h3>
                </div>
                <div class="ml-4">
                </div>
                <div class="ml-4">
                    @can('create', \App\Models\List_checkup::class)
                        <x-jet-nav-link href="{{ route('list_checkups.create') }}">
                            <x-jet-secondary-button class="px-2">
                                <x-svg.svg-plus class="w-6 h-6" />
                                {{ __('Add') }} {{ __('app.Check_Up') }}
                            </x-jet-secondary-button>
                        </x-jet-nav-link>
                    @endcan
                </div>
            </div><br>
            <div class="relative grid grid-cols-6 gap-6 mt-2 ">
                <div class="col-span-3 md:col-span-2 lg:col-span-2">
                    <x-jet-label for="search" value="{{ __('app.search') }}: {{ __('app.name') }} " />
                    <x-jet-input id="search" type="text" class="block w-full mt-1 ring-1 ring-blue-200" autocomplete="off" />
                    {{-- @include('vendor.jetstream.components.autocomplate') --}}
                </div>
            </div>
        </div>
    </div>
    <div class="w-full px-0 overflow-hidden">
        <div class="w-full border-t overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-sm font-semibold text-gray-500 ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 bg-blue-200 dark:bg-gray-700/30">
                        <th class="w-10 px-2 py-3 text-center">{{ __('app.id') }}</th>
                        <th class="px-4 py-3 text-center"><span>{{ __('name') }}</span></th>
                        <th class="px-2 py-3 text-center">{{ __('app.created_at') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('app.updated_at') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('app.actions') }}</th>
                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                @forelse ($list_checkups as $list_checkup)
                    <tbody class="border-t bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                        <tr @if ($loop->even) class="text-sm text-gray-600 dark:text-gray-400 text-gray-800 dark:text-gray-400 bg-gray-100 dark:bg-gray-700" @endif
                            class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-400 hover:bg-gray-100 hover:dark:bg-gray-700">
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center text-xx dark:text-gray-400">
                                {{ ++$i }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $list_checkup->name }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $list_checkup->created_at->diffForHumans() }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $list_checkup->updated_at->diffForHumans() }}
                            </td>
                            <td class="font-semibold text-gray-600 px-4 py-2">
                                <div
                                    class="flex items-center justify-between gap-1 text-sm text-center dark:text-gray-400">
                                    @can('update', $list_checkup)
                                        <x-jet-nav-link href="{{ route('list_checkups.edit', $list_checkup->id) }}">
                                            <x-jet-button wire:click="selectedItem('update','hjhjh')" class="px-2">
                                                <x-svg.svg-update class="w-5 h-5" />
                                            </x-jet-button>
                                        </x-jet-nav-link>
                                    @endcan
                                    @can('view', $list_checkup)
                                        <x-jet-nav-link href="{{ route('list_checkups.show', $list_checkup->id) }}">
                                            <x-jet-button wire:click="selectedItem('show','hjjjjhj')" class="px-2">
                                                <x-svg.svg-show class="w-5 h-5" />
                                            </x-jet-button>
                                        </x-jet-nav-link>
                                    @endcan
                                    @can('delete', $list_checkup)
                                        <form action="{{ route('list_checkups.destroy', $list_checkup->id) }}"
                                            method="POST">
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
        @if (!empty($list_checkups))
            <div class="px-4 py-3 border-t dark:border-gray-700">
                {{ $list_checkups->links() }}
            </div>
        @endif
    </div>
</x-app-layout>
