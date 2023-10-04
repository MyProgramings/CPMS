<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('app.R_Medicines') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('app.R_Medicines') }}</h3>
                </div>
                <div class="ml-4">
                    <x-jet-secondary-button id="print_button">
                        <i class="fa-solid fa-print"></i>&nbsp;
                        {{ __('app.print') }}
                    </x-jet-secondary-button>
                </div>
            </div><br>
            <form action="{{ Route('r_def_meds.index') }}" method="GET">
                <div class="relative grid grid-cols-6 gap-6 mt-2 ">
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <x-jet-label for="search" value="{{ __('app.search') }}: {{ __('app.name') }} {{ __('appointment_s.patient') }}" />
                        <x-jet-input type="text" name="search" id="search" :value="old('search')"
                        class="block w-full mt-1 ring-1 ring-blue-200" autocomplete="off" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="filter" value="{{ __('filter') }}" />
                        <x-select class="mt-1" name="filter">
                            <option value="" readonly="true" hidden="true">{{ __('') }}
                            </option>
                            <option value="all">{{ __('الكل') }}</option>
                            <option value="requird">{{ __('الأدوية المصروفة') }}</option>
                            <option value="ready">{{ __('الأدوية الغير مصروفة') }}</option>
                        </x-select>
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
            <img src="{{ URL::asset('logocenter.PNG') }}" style="width: 100%; height: 180px;">
        </div>
        <div class="w-full border-t overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-sm font-semibold text-gray-500 border-y ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 bg-blue-200 dark:bg-gray-700/30">
                        <th class="w-10 px-2 py-3 text-center">{{ __('id') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('patient') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('appointment') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('doctor') }}</th>
                        <th class="px-4 py-3 text-center">{{ __('medicine name') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('date') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('pharmacist') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('preparer') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('created_at') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('updated_at') }}</th>
                        <th class="px-2 py-3 text-center" id="action_s">{{ __('actions') }}</th>
                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                @forelse ($r_def_meds as $r_def_med)
                    @if ($r_def_med->patient)
                        @if (!(Auth::user()->role_id == 7) || $r_def_med->medicine_type == 'chemist' && $r_def_med->confirm_med && !($r_def_med->confirm))
                        @if (!(Auth::user()->role_id == 6) || !($r_def_med->confirm_med))
                        <tbody class="border-t bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                            <tr @if ($loop->even) class="text-sm text-gray-600 dark:text-gray-400 text-gray-800 dark:text-gray-400 bg-gray-100 dark:bg-gray-700" @endif
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-400 hover:bg-gray-100 hover:dark:bg-gray-700">
                                <td
                                    class="font-semibold text-gray-600 px-2 py-3 text-center text-xx dark:text-gray-400">
                                    {{ ++$i }}
                                </td>
                                <td
                                class="font-semibold text-gray-600 px-2 py-3 text-xs text-center dark:text-gray-400">
                                {{ $r_def_med->patient->name }}
                            </td>
                                <td
                                    class="font-semibold text-gray-600 px-2 py-3 text-xs text-center dark:text-gray-400">
                                    {{ $r_def_med->appointment_id }}
                                </td>
                                <td
                                class="font-semibold text-gray-600 px-2 py-3 text-xs text-center dark:text-gray-400">
                                {{ $r_def_med->user->name }}
                            </td>
                                <td
                                    class="font-semibold text-gray-600 px-2 py-3 text-xs text-center dark:text-gray-400">
                                    {{ $r_def_med->inventoris->name }}
                                </td>
                                <td
                                    class="font-semibold text-gray-600 px-2 py-3 text-xs text-center dark:text-gray-400">
                                    {{ $r_def_med->created_at }}
                                </td>
                                <td
                                    class="font-semibold text-gray-600 px-2 py-3 text-xs text-center dark:text-gray-400">
                                    @if ($r_def_med->confirm_med)
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight rounded-full bg-green-300 text-white">
                                            {{ $r_def_med->pharmacist }}
                                        </span>
                                    @else
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight rounded-full bg-yellow-300 text-white">
                                            {{ '_____________' }}
                                        </span>
                                    @endif
                                </td>
                                <td
                                    class="font-semibold text-gray-600 px-2 py-3 text-xs text-center dark:text-gray-400">
                                    @if ($r_def_med->confirm)
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight rounded-full bg-green-300 text-white">
                                            {{ $r_def_med->preparer }}
                                        </span>
                                    @elseif ($r_def_med->medicine_type == 'chemist')
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight rounded-full bg-yellow-300 text-white">
                                            {{ '_____________' }}
                                        </span>
                                    @endif
                                </td>
                                <td
                                    class="font-semibold text-gray-600 px-2 py-3 text-xs text-center dark:text-gray-400">
                                    {{ $r_def_med->created_at->diffForHumans() }}
                                </td>
                                <td
                                    class="font-semibold text-gray-600 px-2 py-3 text-xs text-center dark:text-gray-400">
                                    {{ $r_def_med->updated_at->diffForHumans() }}
                                </td>
                                <td class="font-semibold text-gray-600 px-4 py-2">
                                    <div class="flex items-center justify-between gap-1 text-sm text-center dark:text-gray-400"
                                        id="action_Button">
                                        @can('update', $r_def_med)
                                        @if (Auth::user()->id == $r_def_med->user_id || !(Auth::user()->role_id == 4))
                                        <x-jet-nav-link href="{{ route('r_def_meds.edit', $r_def_med->id) }}">
                                            <x-jet-button class="px-2">
                                                <x-svg.svg-update class="w-5 h-5" />
                                            </x-jet-button>
                                        </x-jet-nav-link>
                                        @endif
                                        @endcan
                                        @can('view', $r_def_med)
                                            <x-jet-nav-link href="{{ route('r_def_meds.show', $r_def_med->id) }}">
                                                <x-jet-button class="px-2">
                                                    <x-svg.svg-show class="w-5 h-5" />
                                                </x-jet-button>
                                            </x-jet-nav-link>
                                        @endcan

                                        @can('delete', $r_def_med)
                                        @if (Auth::user()->id == $r_def_med->user_id || !(Auth::user()->role_id == 4))
                                            <form action="{{ route('r_def_meds.destroy', $r_def_med->id) }}"
                                                method="POST" style="margin-bottom: 0px;">
                                                @method('DELETE')
                                                @csrf
                                                <x-jet-danger-button type="submit"
                                                    onclick="return confirm('Are you shur to delete')"
                                                    class="px-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
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
                    @endif


                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-3 text-sm text-center text-gray-700 dark:text-gray-400">
                            {{ __('app.No Data') }}</td>
                    </tr>
                @endforelse
            </table>
        </div>
        @if (!empty($r_def_meds))
            <div class="px-4 py-3 border-t dark:border-gray-700">
                {{ $r_def_meds->links() }}
            </div>
        @endif
    </div>
</x-app-layout>
