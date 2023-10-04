<x-app-layout>
        <x-slot name="header">
            <h2>
                <i class="fa-regular fa-calendar-check"></i> {{ __('app.Appoitment') }}
            </h2>
        </x-slot>
        <div class="flex flex-wrap items-center">
            <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                            <i class="fa-regular fa-calendar-check"></i> {{ __('app.Appoitment') }}</h3>
                    </div>
                    <div class="ml-4">
                        <x-jet-secondary-button id="print_button">
                            <i class="fa-solid fa-print"></i>&nbsp;
                            {{ __('app.print') }}
                        </x-jet-secondary-button>
                    </div>
                    <div class="ml-4">
                        @if (Auth::user()->role_id == 4)
                        <h3 class="bg-white text-gray-700 shadow-xl sm:rounded-lg lg:rounded-3xl px-4 py-4 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                            {{ __('Welcome') }} {{ Auth::user()->name }}</h3>
                        @endif
                        @can('create', \App\Models\Appointment::class)
                            <x-jet-nav-link href="{{ route('appointments.create') }}">
                                <x-jet-secondary-button class="animate-pulse px-2 ring-2 ring-blue-500">
                                    <x-svg.svg-plus class="w-6 h-6" />
                                    {{ __('Add') }} {{ __('app.Appoitment') }}
                                </x-jet-secondary-button>
                            </x-jet-nav-link>
                        @endcan
                    </div>
                </div><br>
                <form action="{{ Route('appointments.index') }}" method="GET">
                    <div class="relative grid grid-cols-6 gap-6 mt-2 ">
                        <div class="col-span-3 md:col-span-2 lg:col-span-2">
                            <x-jet-label for="search"
                                value="{{ __('app.search') }}: {{ __('appointment_s.patient') }}, {{ __('R_Check_Up.Appoitment') }} {{ __('app.id') }}" />
                            <x-jet-input id="search" name="search" type="text" value="{{ request('search') }}"
                                class="block w-full mt-1 ring-1 ring-blue-200" autocomplete="off" />
                            {{-- @include('vendor.jetstream.components.autocomplate') --}}
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
                            class="text-sm font-semibold text-gray-500 ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 bg-blue-200 dark:bg-gray-700/30">
                            <th class="w-10 px-2 py-3 text-center">{{ __('app.id') }}</th>
                            <th class="px-4 py-3 text-center"><span>{{ __('appointment_s.patient') }}</span></th>
                            <th class="px-4 py-3 text-center"><span>{{ __('appointment_s.doctor') }}</span></th>
                            <th class="px-4 py-3 text-center"><span>{{ __('appointment_s.reciption') }}</span></th>
                            <th class="px-4 py-3 text-center"><span>{{ __('app.created_at') }}</span></th>
                            <th class="px-4 py-3 text-center"><span>{{ __('app.updated_at') }}</span></th>
                            <th class="px-2 py-3 text-center" id="action_s">{{ __('app.actions') }}</th>
                        </tr>
                    </thead>
                    @php $i = 0; @endphp
                    @forelse ($appointments as $appointment)
                        @if ($appointment->patient && $appointment->user)
                            @if (Auth::user()->id == $appointment->user_id || !(Auth::user()->role_id == 4))
                                @if (!$appointment->close_appointment || Auth::user()->role_id == 1)
                                    <tbody class="border-t bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                                        <tr @if ($loop->even) class="text-sm text-gray-800 dark:text-gray-400 text-gray-800 dark:text-gray-400 bg-gray-100 dark:bg-gray-700" @endif
                                            class="text-sm text-gray-800 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-400 hover:bg-gray-100 hover:dark:bg-gray-700">
                                            <td
                                                class="font-semibold text-gray-800 px-2 py-3 text-center text-xx dark:text-gray-400">
                                                {{ $appointment->id }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-800 px-2 py-3 text-xs text-center dark:text-gray-400">
                                                {{ $appointment->patient->name }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-800 px-2 py-3 text-xs text-center dark:text-gray-400">
                                                {{ $appointment->user->name }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-800 px-2 py-3 text-xs text-center dark:text-gray-400">
                                                {{ $appointment->reciption }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                                {{ $appointment->created_at }}
                                            </td>
                                            <td
                                                class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                                {{ $appointment->updated_at }}
                                            </td>
                                            <td class="font-semibold text-gray-800 px-4 py-2">
                                                <div class="flex items-center justify-between gap-1 text-sm text-center dark:text-gray-400">
                                                    @can('create', \App\Models\R_checkup::class)
                                                        <x-jet-nav-link
                                                            href="{{ route('r_checkup_create', $appointment->id) }}">
                                                            <x-jet-secondary-button class="px-2 ring-2 ring-blue-500" title="{{ __('app.R_Check_Up') }}">
                                                                <i class="fa-solid fa-flask-vial" id="actions_btn"></i>
                                                                {{-- {{ __('app.R_Check_Up') }} --}}
                                                            </x-jet-secondary-button>
                                                        </x-jet-nav-link>
                                                    @endcan
                                                    @can('create', \App\Models\R_checkup::class)
                                                        @php
                                                            $appointment_ids = $appointment->id;
                                                        @endphp
                                                        <x-jet-nav-link
                                                            href="{{ route('r_checkups.index', compact('appointment_ids')) }}">
                                                            <x-jet-secondary-button class="px-2" title="{{ __('app.R_Check_Up') }} {{ __('app.results') }}">
                                                                <i class="fa-solid fa-square-poll-horizontal" id="actions_btn"></i>
                                                                {{-- {{ __('app.results') }} --}}
                                                            </x-jet-secondary-button>
                                                        </x-jet-nav-link>
                                                    @endcan
                                                    @can('create', \App\Models\R_def_med::class)
                                                        <x-jet-nav-link
                                                            href="{{ route('mediacnt_create', $appointment->id) }}">
                                                            <x-jet-secondary-button class="px-2 ring-2 ring-green-500" title="{{ __('app.R_Medicines') }}">
                                                                <i class="fa-solid fa-capsules" id="actions_btn"></i>
                                                                {{-- {{ __('app.R_Medicines') }} --}}
                                                            </x-jet-secondary-button>
                                                        </x-jet-nav-link>
                                                    @endcan
                                                    @can('create', \App\Models\Soc_as::class)
                                                        <x-jet-nav-link
                                                            href="{{ route('soc_as_create', $appointment->id) }}">
                                                            <x-jet-secondary-button class="px-2 ring-2 ring-red-500" title="{{ __('app.social_Assess') }}">
                                                                <i class="fa-solid fa-list-check" id="actions_btn"></i>
                                                                {{-- {{ __('app.social_Assess') }} --}}
                                                            </x-jet-secondary-button>
                                                        </x-jet-nav-link>
                                                    @endcan
                                                    @can('create', \App\Models\Psy_as::class)
                                                        <x-jet-nav-link
                                                            href="{{ route('psy_as_create', $appointment->id) }}">
                                                            <x-jet-secondary-button class="px-2 ring-2 ring-red-500" title="{{ __('app.psychological_Assess') }}">
                                                                <i class="fa-regular fa-rectangle-list" id="actions_btn"></i>
                                                                {{-- {{ __('app.psychological_Assess') }} --}}
                                                            </x-jet-secondary-button>
                                                        </x-jet-nav-link>
                                                    @endcan
                                                    @can('update', $appointment)
                                                        <x-jet-nav-link
                                                            href="{{ route('appointments.edit', $appointment->id) }}" id="actions_btn">
                                                            <x-jet-button class="px-2">
                                                                <x-svg.svg-update class="w-5 h-5" />
                                                            </x-jet-button>
                                                        </x-jet-nav-link>
                                                    @endcan
                                                    @can('view', $appointment)
                                                        <x-jet-nav-link
                                                            href="{{ route('appointments.show', $appointment->id) }}" id="actions_btn">
                                                            <x-jet-button wire:click="selectedItem('show','hjjjjhj')"
                                                                class="px-2">
                                                                <x-svg.svg-show class="w-5 h-5" />
                                                            </x-jet-button>
                                                        </x-jet-nav-link>
                                                    @endcan
                                                    @can('delete', $appointment)
                                                        <form
                                                            action="{{ route('appointments.destroy', $appointment->id) }}"
                                                            method="POST" style="margin-bottom: 0px;" id="actions_btn">
                                                            @method('DELETE')
                                                            @csrf
                                                            <x-jet-danger-button type="submit" onclick="return confirm('Are you shur to delete')">
                                                                <x-svg.svg-delete class="w-5 h-5" />
                                                            </x-jet-secondary-button>
                                                        </form>
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
            @if (!empty($appointments))
                <div class="px-4 py-3 border-t dark:border-gray-700">
                    {{ $appointments->links() }}
                </div>
            @endif
        </div>
</x-app-layout>
