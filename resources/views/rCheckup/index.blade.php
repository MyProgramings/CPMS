<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('app.R_Check_Up') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('app.R_Check_Up') }}</h3>
                </div>
                <div class="ml-4">
                    <x-jet-secondary-button id="print_button">
                        <i class="fa-solid fa-print"></i>&nbsp;
                        {{ __('app.print') }}
                    </x-jet-secondary-button>
                </div>
                {{-- <div class="ml-4">
                                    @can('create', \App\Models\R_checkup::class)
                                        <x-jet-nav-link href="{{ route('r_checkups.create') }}">
                                            <x-jet-button class="px-2" style="font-size: 17px;">
                                                <div>
                                                    {{ __('إضافة فحص') }}
                                                </div>
                                                <x-svg.svg-plus class="w-5 h-5" />
                                            </x-jet-button>
                                        </x-jet-nav-link>
                                    @endcan
                                </div> --}}
            </div><br>
            <form action="{{ Route('r_checkups.index') }}" method="GET">
                <div class="relative grid grid-cols-6 gap-6 mt-2 ">
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <x-jet-label for="search"
                            value="{{ __('app.search') }}: {{ __('app.name') }} {{ __('appointment_s.patient') }}" />
                        <x-jet-input type="text" name="search" id="search" :value="old('search')"
                            class="block w-full mt-1 ring-1 ring-blue-200" autocomplete="off" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="filter" value="{{ __('app.filter') }}" />
                        <x-select class="mt-1" name="filter">
                            <option value="" readonly="true" hidden="true">{{ __('') }}</option>
                            <option value="all">{{ __('app.All') }}</option>
                            <option value="requird">{{ __('فرز المطلوب') }}</option>
                            <option value="ready">{{ __('فرز الجاهز') }}</option>
                        </x-select>
                    </div>
                    <div class="w-full px-0 overflow-hidden mt-8">
                        <x-jet-button type="submit">
                            {{ __('app.search') }}
                        </x-jet-button>
                    </div>
                    {{-- <form action="{{ Route('r_checkups.index') }}" method="get">
                                        @csrf
                                        <div class=" px-0 overflow-hidden mt-8">
                                            <x-jet-button type="submit" value="1" name="filter">
                                                {{ __('فرز المطلوب') }}
                                            </x-jet-button>
                                        </div>
                                    </form>
                                    <form action="{{ Route('r_checkups.index') }}" method="get">
                                        @csrf
                                        <div class=" px-0 overflow-hidden mt-8">
                                            <x-jet-button type="submit" value="2" name="filter">
                                                {{ __('فرز الجاهز') }}
                                            </x-jet-button>
                                        </div>
                                    </form>
                                    <form action="{{ Route('r_checkups.index') }}" method="get">
                                        @csrf
                                        <div class=" px-0 overflow-hidden mt-8">
                                            <x-jet-button type="submit">
                                                {{ __('الكل') }}
                                            </x-jet-button>
                                        </div>

                                    </form> --}}
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
                        <th class="px-4 py-3 text-center"><span>{{ __('patient_s.name') }}</span></th>
                        <th class="px-4 py-3 text-center"><span>{{ __('R_Check_Up.Appoitment') }}</span></th>
                        <th class="px-4 py-3 text-center"><span>{{ __('appointment_s.doctor') }}</span></th>
                        <th class="px-4 py-3 text-center"><span>{{ __('R_Check_Up.laboratory') }}</span></th>
                        <th class="px-4 py-3 text-center"><span>{{ __('app.Check_Up') }}</span></th>
                        <th class="px-4 py-3 text-center"><span>{{ __('app.Check_Up_Details') }}</span></th>
                        <th class="px-4 py-3 text-center"><span>{{ __('R_Check_Up.description_res') }}</span></th>
                        <th class="px-2 py-3 text-center">{{ __('app.created_at') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('app.updated_at') }}</th>
                        <th class="px-2 py-3 text-center" id="action_s">{{ __('app.actions') }}</th>
                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                @forelse ($r_checkups as $r_checkup)
                    @if ($r_checkup->patient)
                        @if (!$r_checkup->description_res || !(Auth::user()->role_id == 5))
                            <tbody class="border-t bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                                <tr @if ($loop->even) class="text-sm text-gray-600 dark:text-gray-400 text-gray-800 dark:text-gray-400 bg-gray-100 dark:bg-gray-700" @endif
                                    class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-400 hover:bg-gray-100 hover:dark:bg-gray-700">
                                    <td
                                        class="font-semibold text-gray-600 px-2 py-3 text-center text-xx dark:text-gray-400">
                                        {{ ++$i }}
                                    </td>
                                    <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                        {{ $r_checkup->patient->name }}
                                    </td>
                                    <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                        {{ $r_checkup->appointment_id }}
                                    </td>
                                    <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                        {{ $r_checkup->user->name }}
                                    </td>
                                    <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                        {{ $r_checkup->laboratorie }}
                                    </td>
                                    <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                        {{ $r_checkup->list_checkup->name }}
                                    </td>
                                    <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                        {{ $r_checkup->li_ch_det->name }}
                                    </td>
                                    <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                        @if ($r_checkup->description_res > $r_checkup->li_ch_det->large_value || $r_checkup->description_res < $r_checkup->li_ch_det->small_value)
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight rounded-full bg-red-500 text-white">
                                                {{ $r_checkup->description_res }}
                                            </span>
                                        @else
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight rounded-full bg-green-300 text-white">
                                                {{ $r_checkup->description_res }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                        {{ $r_checkup->created_at->diffForHumans() }}
                                    </td>
                                    <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                        {{ $r_checkup->updated_at->diffForHumans() }}
                                    </td>
                                    <td class="font-semibold text-gray-600 px-4 py-2">
                                        <div class="flex items-center justify-between gap-1 text-sm text-center dark:text-gray-400"
                                            id="action_Button">
                                            @can('update', $r_checkup)
                                                @if (Auth::user()->id == $r_checkup->user_id || !(Auth::user()->role_id == 4))
                                                    <x-jet-nav-link href="{{ route('r_checkups.edit', $r_checkup->id) }}">
                                                        <x-jet-button wire:click="selectedItem('update','hjhjh')"
                                                            class="px-2">
                                                            <x-svg.svg-update class="w-5 h-5" />
                                                        </x-jet-button>
                                                    </x-jet-nav-link>
                                                @endif
                                            @endcan
                                            @can('view', $r_checkup)
                                                <x-jet-nav-link href="{{ route('r_checkups.show', $r_checkup->id) }}">
                                                    <x-jet-button wire:click="selectedItem('show','hjjjjhj')"
                                                        class="px-2">
                                                        <x-svg.svg-show class="w-5 h-5" />
                                                    </x-jet-button>
                                                </x-jet-nav-link>
                                            @endcan
                                            @can('delete', $r_checkup)
                                                @if (Auth::user()->id == $r_checkup->user_id || !(Auth::user()->role_id == 4))
                                                    <form action="{{ route('r_checkups.destroy', $r_checkup->id) }}"
                                                        method="POST" style="margin-bottom: 0px;">
                                                        @method('DELETE')
                                                        @csrf
                                                        <x-jet-danger-button type="submit"
                                                            class="px-2 bg-red-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition"
                                                            onclick="return confirm('Are you shur to delete')">
                                                            <x-svg.svg-delete class="w-5 h-5" />
                                                        </x-jet-danger-button>
                                                    </form>
                                                @endif
                                            @endcan

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @endif
                    @endif
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-3 text-sm text-center text-gray-700 dark:text-gray-400">
                            {{ __('app.No Data') }}</td>
                    </tr>
                @endforelse
            </table>
        </div>
        @if (!empty($r_checkups))
            <div class="px-4 py-3 border-t dark:border-gray-700">
                {{ $r_checkups->links() }}
            </div>
        @endif
    </div>
</x-app-layout>
