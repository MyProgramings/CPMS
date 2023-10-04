<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('app.Patients') }}
        </h2>
    </x-slot>
    <div id="div_to_print">
        <div id="photo">
            <img src="{{ URL::asset('logocenter.PNG') }}" style="width: 100%; height: 180px;">
        </div>
        <div class="overflow-hidden text-gray-800 shadow-lg lg:px-0 sm:px-10 bg-blue-200 sm:rounded-lg lg:rounded-3xl dark:bg-gray-900 dark:text-gray-400 {{ $patient->file_colors }}">
            <div class="flex flex-wrap items-center">
                <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300">
                                {{ __('app.show') }} {{ __('app.Patients') }}</h3>
                        </div>
                        <div class="ml-4">
                            @can('reports', \App\Models\Patient::class)
                                <x-jet-secondary-button id="print_button">
                                    <i class="fa-solid fa-print"></i>&nbsp;
                                    {{ __('app.print') }}
                                </x-jet-secondary-button>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex border-t flex-wrap items-center">

                <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
                    <div class="relative grid grid-cols-6 gap-6 mt-2">
                        <div class="col-span-1 md:col-span-2 lg:col-span-2">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.name') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->name }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.age') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->age }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.gender') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->gender }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.Birthday') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->Birthday }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.place_of_birth') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->place_of_birth }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.social_status') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->social_status }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.profession') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->profession }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.nationality') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->nationality }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.card_number') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->card_number }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.permanent_address') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->permanent_address }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.temporary_address') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->temporary_address }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.near_mosque') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->near_mosque }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.phone_number') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->phone_number }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.file_number') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->file_number }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.previous_treatment') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->previous_treatment }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.chemotherapy') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->chemotherapy }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.radiotherapy') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->radiotherapy }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.surgery') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->surgery }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.site_of_tumor') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->site_of_tumor }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.type_of_tumor') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->type_of_tumor }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.status') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->status }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.date_of_last_contact') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->date_of_last_contact }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.cause_of_death') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->cause_of_death }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.doctors_name') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->doctors_name }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.speciality') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->speciality }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.reported_by') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->reported_by }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.is_smokeout') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->is_smokeout }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.is_khat') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->is_khat }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.is_chwingtobaco') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->is_chwingtobaco }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.incident_date') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->incident_date }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('app.created_at') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->created_at }}</div>
                            </div>
                        </div>
                        @if ($patient->created_at != $patient->updated_at)
                            <div class="col-span-1 md:col-span-2 lg:col-span-1">
                                <div
                                    class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                    <div
                                        class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                        {{ __('app.updated_at') }}</div>
                                    <div class=" text-sm font-bold z-10">{{ $patient->updated_at }}</div>
                                </div>
                            </div>
                        @endif
                        <br>
                        <div class="col-span-1 md:col-span-2 lg:col-span-4">
                            <div
                                class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.notes_re') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->notes_re }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-0 overflow-hidden mt-7">
                        <x-jet-nav-link href="{{ route('users.index') }}">
                            <x-jet-secondary-button>
                                {{ __('pack') }}
                            </x-jet-secondary-button>
                        </x-jet-nav-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
