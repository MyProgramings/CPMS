<x-app-layout>
    <x-slot name="header">
        <h2>
            <i class="fa-solid fa-syringe"></i> {{ __('pat_givings.pat_givings') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('pat_givings.pat_givings') }}</h3>
                </div>
                <div class="ml-4">
                    <x-jet-secondary-button id="print_button">
                        <i class="fa-solid fa-print"></i>&nbsp;
                        {{ __('app.print') }}
                    </x-jet-secondary-button>
                </div>
                <div class="ml-4">
                    {{-- @can('create', \App\Models\Pat_giving::class)
                        <x-jet-nav-link href="{{ route('pat_givings.create') }}">
                            <x-jet-button class="px-2">
                                <x-svg.svg-plus class="w-5 h-5" />
                                {{ __('Add') }} {{ __('pat_givings.pat_givings') }}
                            </x-jet-button>
                        </x-jet-nav-link>
                    @endcan --}}
                </div>
            </div><br>
            <form action="{{ Route('pat_givings.index') }}" method="GET">
                <div class="relative grid grid-cols-6 gap-6 mt-2 ">
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <x-jet-label for="search" value="{{ __('app.search') }}: {{ __('app.name') }} {{ __('appointment_s.patient') }}" />
                        <x-jet-input type="text" name="search" id="search" :value="old('search')" class="block w-full mt-1 ring-1 ring-blue-200" autocomplete="off" />
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
                        <th class="px-4 py-3 text-center"><span>{{ __('app.Appoitment') }}</span></th>
                        <th class="px-2 py-3 text-center">{{ __('pat_givings.giver_id') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('appointment_s.patient') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('pat_givings.nursing_notes') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('pat_givings.doctor_note') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('created_at') }}</th>
                        <th class="px-2 py-3 text-center">{{ __('updated_at') }}</th>
                        <th class="px-2 py-3 text-center" id="action_s">{{ __('actions') }}</th>
                    </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                @forelse ($pat_givings as $pat_giving)
                    <tbody class="border-t bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                        <tr @if ($loop->even) class="text-sm text-gray-600 dark:text-gray-400 text-gray-800 dark:text-gray-400 bg-gray-100 dark:bg-gray-700" @endif
                            class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-400 hover:bg-gray-100 hover:dark:bg-gray-700">
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center text-xx dark:text-gray-400">
                                {{ ++$i }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $pat_giving->appointment_id }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $pat_giving->giver }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $pat_giving->patient->name }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $pat_giving->nursing_notes }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $pat_giving->doctor_note }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $pat_giving->created_at->diffForHumans() }}
                            </td>
                            <td class="font-semibold text-gray-600 px-2 py-3 text-center dark:text-gray-400">
                                {{ $pat_giving->updated_at->diffForHumans() }}
                            </td>
                            <td class="font-semibold text-gray-600 px-4 py-2">
                                <div class="flex items-center justify-between gap-1 text-sm text-center dark:text-gray-400"
                                    id="action_Button">
                                    @can('update', $pat_giving)
                                        <x-jet-nav-link href="{{ route('pat_givings.edit', $pat_giving->id) }}">
                                            <x-jet-button class="px-2">
                                                <x-svg.svg-update class="w-5 h-5" />
                                            </x-jet-button>
                                        </x-jet-nav-link>
                                    @endcan
                                    @can('view', $pat_giving)
                                        <x-jet-nav-link href="{{ route('pat_givings.show', $pat_giving->id) }}">
                                            <x-jet-button class="px-2">
                                                <x-svg.svg-show class="w-5 h-5" />
                                            </x-jet-button>
                                        </x-jet-nav-link>
                                    @endcan

                                    @can('delete', $pat_giving)
                                        <form action="{{ route('pat_givings.destroy', $pat_giving->id) }}" method="POST"
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
        @if (!empty($pat_givings))
            <div class="px-4 py-3 border-t dark:border-gray-700">
                {{ $pat_givings->links() }}
            </div>
        @endif
    </div>
</x-app-layout>