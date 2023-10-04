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
            <h2>
                {{ __('inventorys_s.inventory') }}
            </h2>
        </x-slot>
        <div class="flex flex-wrap items-center">
            <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                            {{ __('inventorys_s.Medicint') }}</h3>
                    </div>
                    <div class="ml-4">
                        <x-jet-secondary-button id="print_button">
                            <i class="fa-solid fa-print"></i>&nbsp;
                            {{ __('app.print') }}
                        </x-jet-secondary-button>
                    </div>
                    <div class="ml-4">
                        @can('create', \App\Models\Inventoris::class)
                            <x-jet-nav-link href="{{ route('inventories.create') }}">
                                <x-jet-secondary-button class="px-2">
                                    <x-svg.svg-plus class="w-6 h-6" />
                                    {{ __('Add') }} {{ __('inventorys_s.Medicint') }}
                                </x-jet-secondary-button>
                            </x-jet-nav-link>
                        @endcan
                    </div>
                </div>
                <form action="{{ Route('inventories.index') }}" method="GET">
                    <div class="relative grid grid-cols-6 gap-6 mt-2 ">
                        <div class="col-span-3 md:col-span-2 lg:col-span-2">
                            <x-jet-label for="search" value="{{ __('app.search') }}: {{ __('inventorys_s.name') }}" />
                            <x-jet-input id="search" name="search" value="{{ request('search') }}" type="text"
                            class="block w-full mt-1 ring-1 ring-blue-200" autocomplete="off" />
                            @include('vendor.jetstream.components.autocomplate-inventory')
                        </div>
                    </div>
                </form>
                <form action="{{ Route('inventories.index') }}" method="get">
                    @csrf
                    <div class="relative grid grid-cols-6 gap-6 mt-2 ">
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="type" value="{{ __('inventorys_s.medicine_type') }}" />
                            <x-select class="mt-1" name="type" :value="old('type')">
                                <option value="" readonly="true" hidden="true">
                                    {{ __('حدد نوع العلاج') }}</option>
                                <option value="supplementary">{{ __('Supplementary') }}</option>
                                <option value="chemist">{{ __('Chemist') }}</option>
                            </x-select>
                        </div>
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="finsh" value="{{ __('inventorys_s.complete_date') }}" />
                            <x-select class="mt-1" name="finsh" :value="old('finsh')">
                                <option value="" readonly="true" hidden="true">
                                    {{ __('منتهي\عيرمنتهي') }}</option>
                                <option value="finsh">{{ __('المنتهية') }}</option>
                                <option value="not_finsh">{{ __('الغير منتهية') }}</option>
                                <option value="neer_finsh">{{ __('قريبة الأنتهاء') }}</option>
                            </x-select>
                        </div>
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="start_at" value="{{ __('inventorys_s.Start_Date') }}" />
                            <x-jet-input type="date" name="start_at" id="start_at" value="{{ $start_at ?? '' }}"
                                class="mt-1 block w-full" />
                        </div>
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="end_at" value="{{ __('inventorys_s.End_Date') }}" />
                            <x-jet-input type="date" name="end_at" id="end_at" value="{{ $end_at ?? '' }}"
                                class="mt-1 block w-full" />
                        </div>
                        <div class="w-full px-0 overflow-hidden mt-8">
                            <x-jet-button type="submit">
                                {{ __('app.search') }}
                            </x-jet-button>
                        </div>
                        <div class="w-full px-0 overflow-hidden mt-8">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-full px-0 overflow-hidden" id="div_to_print">
            <div id="photo">
                <img src="{{ URL::asset('logocenter.PNG') }}" style="width: 100%; height: 180px;">
            </div>
            <div class="w-full border-t overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-sm font-semibold text-gray-500 border-y ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 bg-blue-200 dark:bg-gray-700/30">
                            <th class="w-10 px-2 py-3 text-center">{{ __('app.id') }}</th>
                            <th class="px-4 py-3 text-center"><span>{{ __('inventorys_s.name') }}</span>
                            </th>
                            <th class="px-2 py-3 text-center">{{ __('inventorys_s.medicine_type') }}</th>
                            <th class="px-2 py-3 text-center">{{ __('inventorys_s.power') }}</th>
                            <th class="px-2 py-3 text-center">{{ __('inventorys_s.quantity') }}</th>
                            <th class="px-2 py-3 text-center">{{ __('inventorys_s.complete_date') }}</th>
                            <th class="px-2 py-3 text-center">{{ __('inventorys_s.price') }}</th>
                            <th class="px-2 py-3 text-center">{{ __('total') }}</th>
                            <th class="px-2 py-3 text-center">{{ __('inventorys_s.store_keeper') }}</th>
                            <th class="px-2 py-3 text-center">{{ __('app.created_at') }}</th>
                            <th class="px-2 py-3 text-center">{{ __('app.updated_at') }}</th>
                            <th class="px-2 py-3 text-center" id="action_s">{{ __('app.actions') }}</th>
                        </tr>
                    </thead>
                    @php $i = 0; @endphp
                    @forelse ($inventorys as $inventory)
                        <tbody class="border-l bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                            <tr @if ($loop->even) class="text-sm text-gray-600 dark:text-gray-400 text-gray-800 dark:text-gray-400 bg-gray-100 dark:bg-gray-800 hover:dark:bg-gray-700" @endif
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-400 hover:bg-gray-100 hover:dark:bg-gray-700">
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ ++$i }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $inventory->name }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $inventory->medicine_type }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $inventory->power }}
                                </td>
                                @php
                                    $total_quantity = 0;
                                    $quantity_inventory = 0;
                                @endphp
                                @foreach ($inventory->r_def_meds as $r_def_med)
                                    @php
                                        $total_quantity += $r_def_med->quantity;
                                    @endphp
                                @endforeach
                                @php
                                    $quantity_inventory = $inventory->quantity - $total_quantity;
                                @endphp
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    @if (!($quantity_inventory < 0))
                                        {{ $quantity_inventory }}
                                    @else
                                        {{ '0' }}
                                    @endif

                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight rounded-full
                                                @if ($inventory->complete_date > now()->subDays(-30)) bg-green-600 text-white
                                                @elseif ($inventory->complete_date < today())
                                                bg-red-500 text-white
                                                @else bg-yellow-500 text-white @endif">{{ $inventory->complete_date }}
                                    </span>
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ number_format($inventory->price, 0) }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    @if (!($quantity_inventory < 0))
                                        {{ number_format($inventory->price * $quantity_inventory, 0) }}
                                    @else
                                        {{ '0' }}
                                    @endif
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $inventory->store_keeper }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $inventory->created_at->diffForHumans() }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $inventory->updated_at->diffForHumans() }}
                                </td>
                                <td class="font-semibold text-gray-800 px-4 py-2">
                                    <div class="flex items-center justify-between gap-1 text-sm text-center dark:text-gray-400"
                                        id="action_Button">

                                        @can('update', $inventory)
                                            <x-jet-nav-link href="{{ route('inventories.edit', $inventory->id) }}">
                                                <x-jet-button class="px-2">
                                                    <x-svg.svg-update class="w-5 h-5" />
                                                </x-jet-button>
                                            </x-jet-nav-link>
                                        @endcan
                                        @can('view', $inventory)
                                            <x-jet-nav-link href="{{ route('inventories.show', $inventory->id) }}">
                                                <x-jet-button class="px-2">
                                                    <x-svg.svg-show class="w-5 h-5" />
                                                </x-jet-button>
                                            </x-jet-nav-link>
                                        @endcan

                                        @can('delete', $inventory)
                                            <form action="{{ route('inventories.destroy', $inventory->id) }}"
                                                method="POST" style="margin-bottom: 0px;">
                                                @method('DELETE')
                                                @csrf
                                                <x-jet-danger-button type="submit"
                                                    onclick="return confirm('Are you shur to delete')"
                                                    class="px-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
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
            @if (!empty($inventorys))
                <div class="px-4 py-3 border-t dark:border-gray-700">
                    {{ $inventorys->links() }}
                </div>
            @endif
        </div>
</x-app-layout>
