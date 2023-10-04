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

    .dropdown-menu .dropdown-item {
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
            <h2>
                {{ __('patient_s.patients') }}
            </h2>
        </x-slot>
        <div class="flex flex-wrap items-center">
            <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                            {{ __('patient_s.patients') }}</h3>
                    </div>
                    <div class="ml-4">
                        @can('reports', \App\Models\Patient::class)
                            <x-jet-secondary-button id="print_button">
                                <i class="fa-solid fa-print"></i>&nbsp;
                                {{ __('app.print') }}
                            </x-jet-secondary-button>
                        @endcan
                    </div>
                    <div class="ml-4">
                        @can('create', \App\Models\Patient::class)
                            <x-jet-nav-link href="{{ route('patients.create') }}">
                                <x-jet-secondary-button class="px-2">
                                    <div>
                                        {{ __('patient_s.Add_patient') }}
                                    </div>
                                    <x-svg.svg-plus class="w-6 h-6" />
                                </x-jet-secondary-button>
                            </x-jet-nav-link>
                        @endcan
                    </div>
                </div><br>
                <form action="{{ Route('patients.index') }}" method="GET" autocomplete="off">
                    <div class="relative grid grid-cols-6 gap-6 mt-2 ">
                        <div class="col-span-3 md:col-span-2 lg:col-span-2">
                            <x-jet-label for="search"
                                value="{{ __('app.search') }}: {{ __('patient_s.name') }}, {{ __('patient_s.file_number') }}, {{ __('patient_s.file_colors') }}" />
                            <x-jet-input type="text" name="search" id="search" value="{{ __($search ?? '') }}"
                            class="block w-full mt-1 ring-1 ring-blue-200" autocomplete="off" />
                            @include('vendor.jetstream.components.autocomplate-patients')
                        </div>
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="filter" value="{{ __('patient_s.status') }}" />
                            <x-select class="mt-1" name="filter">
                                <option value="" readonly="true" hidden="true">
                                    {{ __($filter ?? '') }}</option>
                                <option value="">{{ __('app.All') }}</option>
                                <option value="dead">{{ __('patient_s.dead') }}</option>
                                <option value="recuperate">{{ __('patient_s.recuperate') }}</option>
                            </x-select>
                        </div>
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="gender" value="{{ __('patient_s.gender') }}" />
                            <x-select class="mt-1" name="gender">
                                <option value="" readonly="true" hidden="true">
                                    {{ __($gender ?? '') }}</option>
                                <option value="">{{ __('app.All') }}</option>
                                <option value="Male">{{ __('patient_s.Male') }}</option>
                                <option value="Female">{{ __('patient_s.Female') }}</option>
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
            <div class="w-full border-l overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-sm font-semibold text-gray-500 border-y ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 bg-blue-200 dark:bg-gray-700/30">
                            <th class="w-10 px-2 py-3 text-center">{{ __('patient_s.id') }}</th>
                            <th class="px-4 py-3 text-center"><span>{{ __('patient_s.name') }}</span></th>
                            <th class="px-4 py-3 text-center"><span>{{ __('patient_s.age') }}</span></th>
                            <th class="px-4 py-3 text-center"><span>{{ __('patient_s.gender') }}</span>
                            </th>
                            <th class="px-4 py-3 text-center"><span>{{ __('patient_s.Birthday') }}</span>
                            </th>
                            <th class="px-4 py-3 text-center">
                                <span>{{ __('patient_s.nationality') }}</span>
                            </th>
                            <th class="px-4 py-3 text-center">
                                <span>{{ __('patient_s.permanent_address') }}</span>
                            </th>
                            <th class="px-4 py-3 text-center">
                                <span>{{ __('patient_s.phone_number') }}</span>
                            </th>
                            <th class="px-4 py-3 text-center">
                                <span>{{ __('patient_s.file_colors') }}/{{ __('patient_s.file_number') }}</span>
                            </th>
                            <th class="px-2 py-3 text-center">{{ __('patient_s.Registration_date') }}</th>
                            <th class="px-2 py-3 text-center" id="action_s">{{ __('patient_s.actions') }}
                            </th>
                        </tr>
                    </thead>
                    @php
                        $i = 0;
                    @endphp
                    @forelse ($patients as $patient)
                        <tbody class="border-l bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                            <tr @if ($loop->even) class="text-sm text-gray-600 dark:text-gray-400 text-gray-800 dark:text-gray-400 bg-gray-100 dark:bg-gray-800 hover:dark:bg-gray-700" @endif
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-400 hover:bg-gray-100 hover:dark:bg-gray-700">
                                <td
                                    class="font-semibold text-gray-600 px-2 py-3 text-center text-xx dark:text-gray-400">
                                    {{ ++$i }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $patient->name }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $patient->age }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $patient->gender }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $patient->Birthday }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $patient->nationality }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $patient->permanent_address }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $patient->phone_number }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight rounded-full {{ $patient->file_colors }}">
                                        {{ $patient->id }}
                                    </span>
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $patient->created_at->diffForHumans() }}
                                </td>
                                <td class="font-semibold text-gray-600 px-4 py-2">
                                    <div class="flex items-center justify-between gap-1 text-sm text-center dark:text-gray-400"
                                        id="action_Button">
                                        @can('update', $patient)
                                            <x-jet-nav-link href="{{ route('patients.edit', $patient->id) }}" id="actions_btn">
                                                <x-jet-button wire:click="selectedItem('update','hjhjh')" class="px-2">
                                                    <x-svg.svg-update class="w-5 h-5" />
                                                </x-jet-button>
                                            </x-jet-nav-link>
                                        @endcan
                                        @can('view', $patient)
                                            <x-jet-nav-link href="{{ route('patients.show', $patient->id) }}" id="actions_btn">
                                                <x-jet-button wire:click="selectedItem('show','hjjjjhj')" class="px-2">
                                                    <x-svg.svg-show class="w-5 h-5" />
                                                </x-jet-button>
                                            </x-jet-nav-link>
                                        @endcan

                                        @can('delete', $patient)
                                            <form action="{{ route('patients.destroy', $patient->id) }}" method="POST"
                                                style="margin-bottom: 0px;">
                                                @method('DELETE')
                                                @csrf
                                                <x-jet-danger-button type="submit"
                                                    onclick="return confirm('Are you shur to delete')"
                                                    class="px-2 bg-red-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition" id="actions_btn">
                                                    <x-svg.svg-delete class="w-5 h-5" />
                                                </x-jet-danger-button>
                                            </form>
                                        @endcan
                                        @can('reports', $patient)
                                        <x-jet-nav-link href="{{ route('reports', $patient->id) }}" id="actions_btn">
                                            <x-jet-secondary-button class="px-2" title="{{ __('app.Reports') }}">
                                                <i class="fa-solid fa-file-lines" id="actions_btn"></i>
                                            </x-jet-secondary-button>
                                        </x-jet-nav-link>
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
            @if (!empty($patients))
                <div class="px-4 py-3 border-t dark:border-gray-700">
                    {{ $patients->links() }}
                </div>
            @endif
        </div>
</x-app-layout>
