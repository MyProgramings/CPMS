<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Soc_as.soc_ass') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('Soc_as.soc_ass') }}</h3>
                </div>
                <div class="ml-4">
                    <x-jet-secondary-button id="print_button">
                        <i class="fa-solid fa-print"></i>&nbsp;
                        {{ __('app.print') }}
                    </x-jet-secondary-button>
                </div>
                <div class="ml-4">
                </div>
            </div><br>
            <form action="{{ Route('soc_ass.index') }}" method="GET">
                <div class="relative grid grid-cols-6 gap-6 mt-2 ">
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <x-jet-label for="search" value="{{ __('app.search') }}: {{ __('app.name') }} {{ __('appointment_s.patient') }}, {{ __('psy_as_s.ps_as_id') }}" />
                        <x-jet-input id="search" name="search" value="{{ request('search') }}" type="text"
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
                        class="text-sm font-semibold text-gray-500 border-y ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 bg-blue-200 dark:bg-gray-700/30">
                        <th class="w-10 px-2 py-3 text-center">{{ __('app.id') }}</th>
                        <th class="px-4 py-3 text-center">{{ __('Soc_as.patient') }}</th>
                        <th class="w-10 px-2 py-3 text-center">{{ __('R_Check_Up.Appoitment') }}</th>
                        <th class="px-4 py-3 text-center"><span>{{ __('appointment_s.doctor') }}</span></th>
                        <th class="px-2 py-3 text-center">{{ __('Soc_as.soc_as') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('app.created_at') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('app.updated_at') }}</th>
                        <th class="px-2 py-3 text-center" id="action_s">{{ __('app.actions') }}</th>
                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                @forelse ($soc_ass as $soc_as)
                    @if ($soc_as->patient)
                        <tbody class="border-t bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                            <tr @if ($loop->even) class="text-sm text-gray-600 dark:text-gray-400 text-gray-800 dark:text-gray-400 bg-gray-100 dark:bg-gray-700" @endif
                                class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-400 hover:bg-gray-100 hover:dark:bg-gray-700">
                                <td
                                    class="font-semibold text-gray-600 px-2 py-3 text-center text-xx dark:text-gray-400">
                                    {{ ++$i }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $soc_as->patient->name }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $soc_as->appointment_id }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $soc_as->user->name }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $soc_as->so_as }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $soc_as->created_at->diffForHumans() }}
                                </td>
                                <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                    {{ $soc_as->updated_at->diffForHumans() }}
                                </td>
                                <td class="font-semibold text-gray-600 px-4 py-2">
                                    <div class="flex items-center justify-between gap-1 text-sm text-center dark:text-gray-400"
                                        id="action_Button">

                                        @can('update', $soc_as)
                                        @if (Auth::user()->id == $soc_as->user_id || !(Auth::user()->role_id == 4))
                                            <x-jet-nav-link href="{{ route('soc_ass.edit', $soc_as->id) }}">
                                                <x-jet-button class="px-2">
                                                    <x-svg.svg-update class="w-5 h-5" />
                                                </x-jet-button>
                                            </x-jet-nav-link>
                                            @endif
                                        @endcan
                                        @can('view', $soc_as)
                                            <x-jet-nav-link href="{{ route('soc_ass.show', $soc_as->id) }}">
                                                <x-jet-button class="px-2">
                                                    <x-svg.svg-show class="w-5 h-5" />
                                                </x-jet-button>
                                            </x-jet-nav-link>
                                        @endcan
                                        @can('delete', $soc_as)
                                        @if (Auth::user()->id == $soc_as->user_id || !(Auth::user()->role_id == 4))
                                            <form action="{{ route('soc_ass.destroy', $soc_as->id) }}" method="POST"
                                                style="margin-bottom: 0px;">
                                                @method('DELETE')
                                                @csrf
                                                <x-jet-danger-button type="submit"
                                                    onclick="return confirm('Are you shur to delete')"
                                                    class="px-2 bg-red-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
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
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-3 text-sm text-center text-gray-700 dark:text-gray-400">
                            {{ __('app.No Data') }}</td>
                    </tr>
                @endforelse
            </table>
        </div>
        @if (!empty($soc_ass))
            <div class="px-4 py-3 border-t dark:border-gray-700">
                {{ $soc_ass->links() }}
            </div>
        @endif
    </div>
</x-app-layout>
