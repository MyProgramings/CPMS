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
    <div wire:init="loadItems">
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 text-primary-700 dark:text-primary-400">
                {{ __('inventorys_s.inventorys') }}
            </h2>
        </x-slot>
        <div class="py-10">
            <div class="pr-0 mx-auto max-w-8xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden text-gray-800 shadow-lg lg:px-0 sm:px-10 bg-blue-100 sm:rounded-lg lg:rounded-3xl dark:bg-gray-900 dark:text-gray-400">
                    <div class="flex flex-wrap items-center">
                        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3
                                        class="text-lg font-semibold text-gray-600 ltr:text-left rtl:text-right dark:text-gray-400">
                                        {{ __('inventorys_s.Medicint') }}</h3>
                                </div>
                                <div class="ml-4">
                                    @can('create', \App\Models\Inventory::class)
                                        <x-jet-nav-link href="{{ route('dashboard') }}">
                                            <x-jet-button class="px-2">
                                                <x-svg.svg-restore class="w-5 h-5" />
                                            </x-jet-button>
                                        </x-jet-nav-link>
                                    @endcan
                                </div>
                                <div class="ml-4">
                                    @can('create', \App\Models\Inventory::class)
                                        <x-jet-nav-link href="{{ route('inventories.create') }}">
                                            <x-jet-button class="px-2">
                                                <x-svg.svg-plus class="w-5 h-5" />
                                            </x-jet-button>
                                        </x-jet-nav-link>
                                    @endcan
                                </div>
                            </div>
                            <form action="{{ Route('inventories.index') }}" method="GET">
                                <div class="relative grid grid-cols-6 gap-6 mt-2 ">
                                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                                        <x-jet-label for="search" value="{{ __('app.search') }}" />
                                        <x-jet-input id="search" name="search" value="{{ request('search') }}"
                                            type="text" class="block w-full mt-1" autocomplete="off" />
                                        @include('vendor.jetstream.components.autocomplate-inventory')
                                    </div>
                                </div>
                            </form>
                            <form action="{{ Route('inventories.index') }}" method="get">
                            @csrf
                            <div class="relative grid grid-cols-6 gap-6 mt-2 ">
                                <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                    <x-jet-label for="type" value="{{ __('medicine type') }}" />
                                    <x-select class="mt-1" name="type" :value="old('type')">
                                        <option value="" readonly="true" hidden="true">{{ __('حدد نوع العلاج' )}}</option>
                                        <option value="1">{{ __('Supplementary') }}</option>
                                        <option value="2">{{ __('Chemist') }}</option>
                                    </x-select>
                                </div>
                                <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                    <x-jet-label for="start_at" value="{{ __('Start Date') }}" />
                                    <x-jet-input type="date" name="start_at" id="start_at"
                                    value="{{ $start_at ?? '' }}" class="mt-1 block w-full" />
                                </div>
                                <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                    <x-jet-label for="end_at" value="{{ __('End Date') }}" />
                                    <x-jet-input type="date" name="end_at" id="end_at"
                                    value="{{ $end_at ?? '' }}" class="mt-1 block w-full" />
                                </div>
                                <div class="w-full px-0 overflow-hidden mt-8">
                                    <x-jet-button type="submit">
                                        {{ __('app.search') }}
                                    </x-jet-button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>

                    <div class="w-full px-0 overflow-hidden" id="div_to_print">
                        <div id="photo">
                        <img src="logocenter.PNG" style="width: 100%; height: 180px;">
                      </div>
                        <div class="w-full border-t overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                        class="text-sm font-semibold text-gray-500 border-y ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700/30">
                                        <th class="w-10 px-2 py-3 text-center">{{ __('id') }}</th>
                                        <th class="px-4 py-3"><span>{{ __('medicine name') }}</span></th>
                                        <th class="px-2 py-3 text-center">{{ __('quantity') }}</th>
                                        <th class="px-2 py-3 text-center">{{ __('medicine_type') }}</th>
                                        <th class="px-2 py-3 text-center">{{ __('power') }}</th>
                                        <th class="px-2 py-3 text-center">{{ __('complete_date') }}</th>
                                        <th class="px-2 py-3 text-center">{{ __('price') }}</th>
                                        <th class="px-2 py-3 text-center">{{ __('store_keeper_id') }}</th>
                                        <th class="px-2 py-3 text-center">{{ __('deleted_at') }}</th>
                                        <th class="px-2 py-3 text-center">{{ __('notes_inv') }}</th>
                                        <th class="px-2 py-3 text-center" id="action_s">{{ __('actions') }}</th>
                                    </tr>
                                </thead>
                                @php
                                    $i = 0;
                                @endphp
                                @forelse ($inventorys as $inventory)
                                    <tbody class="border-t bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                                        <tr @if ($loop->even) class="text-sm text-gray-600 dark:text-gray-400 text-gray-800 dark:text-gray-400 bg-gray-100 dark:bg-gray-700" @endif
                                            class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-400 hover:bg-gray-100 hover:dark:bg-gray-700">
                                            <td
                                                class="font-semibold text-gray-600 px-2 py-3 text-center text-xx dark:text-gray-400">
                                                {{ ++$i }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-600 px-2 py-3 text-xs text-center dark:text-gray-400">
                                                {{ $inventory->name }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-600 px-2 py-3 text-xs text-center dark:text-gray-400">
                                                {{ $inventory->quantity }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-600 px-2 py-3 text-xs text-center dark:text-gray-400">
                                                {{ $inventory->medicine_type }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-600 px-2 py-3 text-center text-xx dark:text-gray-400">
                                                {{ $inventory->power }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-600 px-2 py-3 text-center text-xx dark:text-gray-400">
                                                {{ $inventory->complete_date }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-600 px-2 py-3 text-center text-xx dark:text-gray-400">
                                                {{ $inventory->price }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-600 px-2 py-3 text-center text-xx dark:text-gray-400">
                                                {{ $inventory->store_keeper_id }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-600 px-2 py-3 text-xs text-center dark:text-gray-400">
                                                {{ $inventory->created_at->diffForHumans() }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-600 px-2 py-3 text-center text-xx dark:text-gray-400">
                                                {{ $inventory->notes_inv }}
                                            </td>
                                            <td class="font-semibold text-gray-600 px-4 py-3">
                                                <div class="flex items-center justify-between gap-1 text-sm text-center dark:text-gray-400" id="action_Button">

                                                    @can('update', $inventory)
                                                        <x-jet-nav-link
                                                            href="{{ route('inventories.edit', $inventory->id) }}">
                                                            <x-jet-button wire:click="selectedItem('update','hjhjh')"
                                                                class="px-2">
                                                                <x-svg.svg-update class="w-5 h-5" />
                                                            </x-jet-button>
                                                        </x-jet-nav-link>
                                                    @endcan
                                                    @can('view', $inventory)
                                                        <x-jet-nav-link
                                                            href="{{ route('inventories.show', $inventory->id) }}">
                                                            <x-jet-button wire:click="selectedItem('show','hjjjjhj')"
                                                                class="px-2">
                                                                <x-svg.svg-show class="w-5 h-5" />
                                                            </x-jet-button>
                                                        </x-jet-nav-link>
                                                    @endcan

                                                    @can('delete', $inventory)
                                                        <form action="{{ route('inventories.destroy', $inventory->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <x-jet-secondary-button type="submit"
                                                                onclick="return confirm('Are you shur to delete')"
                                                                class="px-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
                                                                <x-svg.svg-delete class="w-5 h-5" />
                                                            </x-jet-secondary-button>
                                                        </form>
                                                    @endcan

                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                @empty
                                    <tr>
                                        <td colspan="7"
                                            class="px-4 py-3 text-sm text-center text-gray-700 dark:text-gray-400">
                                            {{ __('app.No Data') }}</td>
                                    </tr>
                                @endforelse
                            </table>
                        </div><button id="print_button">submit</button>
                        @if(!empty($inventorys))
                            <div class="px-4 py-3 border-t dark:border-gray-700">
                                {{-- {{ $inventorys->links() }} --}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
