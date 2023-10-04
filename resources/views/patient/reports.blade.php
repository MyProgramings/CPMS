<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('app.Patients') }}
        </h2>
    </x-slot>
    <div id="div_to_print">
        <div id="photo">
            <img src="{{ URL::asset('logocenter.PNG') }}" style="width: 100%; height: 250px;">
        </div>
        <div
            class="overflow-hidden text-gray-800 shadow-lg lg:px-0 sm:px-10 bg-blue-200 sm:rounded-lg lg:rounded-3xl dark:bg-gray-900 dark:text-gray-400 {{ $patient->file_colors }}">
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

                <div class="bg-slate-200 relative flex-row flex-1 w-full max-w-full px-4 py-4">
                    <div class="relative grid grid-cols-3 gap-6 mt-2">
                        {{-- @forelse ($patients as $patient) --}}
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.name') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->name }}</div>
                            </div>
                        </div>
                        {{-- @empty
                            @endforelse --}}
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.age') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->age }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.gender') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->gender }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.Birthday') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->Birthday }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.place_of_birth') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->place_of_birth }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.social_status') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->social_status }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.profession') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->profession }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.nationality') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->nationality }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.card_number') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->card_number }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.permanent_address') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->permanent_address }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.temporary_address') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->temporary_address }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.near_mosque') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->near_mosque }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.phone_number') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->phone_number }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.file_number') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->file_number }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.previous_treatment') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->previous_treatment }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.chemotherapy') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->chemotherapy }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.radiotherapy') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->radiotherapy }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.surgery') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->surgery }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.site_of_tumor') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->site_of_tumor }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.type_of_tumor') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->type_of_tumor }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.status') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->status }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.date_of_last_contact') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->date_of_last_contact }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.cause_of_death') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->cause_of_death }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.doctors_name') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->doctors_name }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.speciality') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->speciality }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.reported_by') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->reported_by }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.is_smokeout') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->is_smokeout }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.is_khat') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->is_khat }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.is_chwingtobaco') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->is_chwingtobaco }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.incident_date') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->incident_date }}</div>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 lg:col-span-1">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('app.created_at') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->created_at }}</div>
                            </div>
                        </div>
                        @if ($patient->created_at != $patient->updated_at)
                            <div class="col-span-1 md:col-span-2 lg:col-span-1">
                                <div
                                    class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                    <div
                                        class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                        {{ __('app.updated_at') }}</div>
                                    <div class=" text-sm font-bold z-10">{{ $patient->updated_at }}</div>
                                </div>
                            </div>
                        @endif
                        <div class="col-span-1 md:col-span-2 lg:col-span-4">
                            <div
                                class="relative p-3 shadow-md bg-white dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                                <div
                                    class="absolute -top-4 ltr:left-3 rtl:right-3  px-3 pt-1 text-xs font-semibold bg-white dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                                    {{ __('patient_s.notes_re') }}</div>
                                <div class=" text-sm font-bold z-10">{{ $patient->notes_re }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="relative grid grid-cols-2 gap-6 mt-6">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <h3 class="text-lg font-medium leading-6 text-gray-900"><i
                                        class="fa-solid fa-vials">&nbsp;</i> {{ __('app.R_Check_Up') }}
                                </h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">With details.</p>
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-8 sm:gap-4 sm:px-6">
                                        <dt
                                            class="text-sm font-medium text-gray-500 mt-1 text-sm sm:col-span-2 sm:mt-0">
                                            {{ __('R_Check_Up.doctor') }}</dt>
                                        <dt
                                            class="text-sm font-medium text-gray-500 mt-1 text-sm sm:col-span-2 sm:mt-0">
                                            {{ __('app.Check_Up') }}</dt>
                                        <dt class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                            {{ __('app.Check_Up_Details') }}</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                            {{ __('R_Check_Up.description_res') }}</dd>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                            {{ __('app.created_at') }}</dd>
                                    </div>
                                    @forelse ($r_checkups as $r_checkup)
                                        <div
                                            @if ($loop->even) class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-8 sm:gap-4 sm:px-6"
                                        @else
                                        class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-8 sm:gap-4 sm:px-6" @endif>
                                            <dt
                                                class="text-sm font-medium text-gray-500 mt-1 text-sm sm:col-span-2 sm:mt-0">
                                                {{ $r_checkup->user->name }} </dt>
                                            <dt
                                                class="text-sm font-medium text-gray-500 mt-1 text-sm sm:col-span-2 sm:mt-0">
                                                {{ $r_checkup->list_checkup->name }} </dt>
                                            <dt class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                                {{ $r_checkup->li_ch_det->name }} </dt>
                                            <dt class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                                {{ $r_checkup->description_res }}</dt>
                                            <dt class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                {{ $r_checkup->created_at }}</dt>
                                        </div>
                                    @empty
                                    @endforelse
                                </dl>
                            </div>
                        </div>
                        <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <h3 class="text-lg font-medium leading-6 text-gray-900"><i
                                        class="fa-solid fa-suitcase-medical"></i>&nbsp; {{ __('app.R_Medicines') }}
                                </h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">With details.</p>
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-8 sm:gap-4 sm:px-6">
                                        <dt
                                            class="text-sm font-medium text-gray-500 mt-1 text-sm sm:col-span-2 sm:mt-0">
                                            {{ __('R_Check_Up.doctor') }}</dt>
                                        <dt
                                            class="text-sm font-medium text-gray-500 mt-1 text-sm sm:col-span-2 sm:mt-0">
                                            {{ __('inventorys_s.medicine_type') }}</dt>
                                        <dt class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                            {{ __('inventorys_s.name') }}</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                            {{ __('inventorys_s.quantity') }}</dd>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                            {{ __('r_def_meds.duration') }}</dd>
                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                            {{ __('app.created_at') }}</dd>
                                    </div>
                                    @forelse ($r_def_meds as $r_def_med)
                                        <div
                                            @if ($loop->even) class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-8 sm:gap-4 sm:px-6"
                                            @else
                                            class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-8 sm:gap-4 sm:px-6" @endif>
                                            <dt
                                                class="text-sm font-medium text-gray-500 mt-1 text-sm sm:col-span-2 sm:mt-0">
                                                {{ $r_def_med->user->name }}: </dt>
                                            <dt
                                                class="text-sm font-medium text-gray-500 mt-1 text-sm sm:col-span-2 sm:mt-0">
                                                {{ $r_def_med->medicine_type }}: </dt>
                                            <dt class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                                {{ $r_def_med->inventoris->name }}: </dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                                {{ $r_def_med->quantity }}</dd>
                                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                                {{ $r_def_med->duration }}</dd>
                                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-1 sm:mt-0">
                                                {{ $r_def_med->created_at }}</dd>
                                        </div>
                                    @empty
                                        <tr>
                                            <td colspan="7"
                                                class="px-4 py-3 text-sm text-center text-gray-700 dark:text-gray-400">
                                                {{ __('app.No Data') }}</td>
                                        </tr>
                                    @endforelse
                                </dl>
                            </div>
                        </div>
                    </div><br>
                    <div class="w-full border-l overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="bg-white w-full whitespace-no-wrap">
                            <thead>
                                <div class="bg-white px-4 py-5 sm:px-6">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900"><i
                                            class="fa-solid fa-suitcase-medical"></i>&nbsp;
                                        {{ __('app.patient_Giving') }}
                                    </h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">With details.</p>
                                </div>
                                <tr class="text-sm font-medium leading-6 text-gray-900 border-y ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700/30">
                                    <th class="w-10 px-2 py-3 text-center">{{ __('app.id') }}</th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('appointment_s.patient') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('R_Check_Up.Appoitment') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('pat_givings.giver_id') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('app.R_Medicines') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('pat_givings.check_in') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('pat_givings.registry_sheet') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('pat_givings.radiology_report') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('pat_givings.previous_ctx') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('pat_givings.CTX_pre_date') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('pat_givings.ctx_previous_cycle_date') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('pat_givings.doctor_note') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('pat_givings.nursing_notes') }}</span></th>
                                </tr>
                            </thead>
                            @php
                                $i = 0;
                            @endphp
                            @forelse ($pat_givings as $pat_giving)
                                <tbody class="border-l bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                                    <tr @if ($loop->odd) class="text-sm text-gray-600 dark:text-gray-400 text-gray-800 dark:text-gray-400 bg-gray-100 dark:bg-gray-800 hover:dark:bg-gray-700" @endif
                                        class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-400 hover:bg-gray-100 hover:dark:bg-gray-700">
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center text-xx dark:text-gray-400">
                                            {{ ++$i }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $pat_giving->patient->name }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $pat_giving->appointment_id }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $pat_giving->giver }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            @if ($pat_giving->r_def_med)
                                                {{ $pat_giving->r_def_med->inventoris->name }}
                                            @endif
                                        </td>
                                        <td
                                        class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                        {{ $pat_giving->check_in }}
                                        </td>
                                        <td
                                        class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                        {{ $pat_giving->registry_sheet }}
                                        </td>
                                        <td
                                        class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                        {{ $pat_giving->radiology_report }}
                                        </td>
                                        <td
                                        class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                        {{ $pat_giving->previous_ctx }}
                                        </td>
                                        <td
                                        class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                        {{ $pat_giving->CTX_pre_date }}
                                        </td>
                                        <td
                                        class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                        {{ $pat_giving->ctx_previous_cycle_date }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $pat_giving->doctor_note }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $pat_giving->nursing_notes }}
                                        </td>
                                    </tr>
                                </tbody>
                            @empty
                                <tr>
                                    <td colspan="7"
                                        class="px-4 py-4 text-sm text-center text-gray-700 dark:text-gray-400">
                                        {{ __('app.No Data') }}</td>
                                </tr>
                            @endforelse
                        </table>
                    </div><br>
                    <div class="w-full border-l overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="bg-white w-full whitespace-no-wrap">
                            <thead>
                                <div class="bg-white px-4 py-5 sm:px-6">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900"><i
                                            class="fa-solid fa-suitcase-medical"></i>&nbsp;
                                        {{ __('app.psychological_Assess') }}
                                    </h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">With details.</p>
                                </div>
                                <tr class="text-sm font-medium leading-6 text-gray-900 border-y ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700/30">
                                    <th class="w-10 px-2 py-3 text-center">{{ __('app.id') }}</th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('Soc_as.patient') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('R_Check_Up.Appoitment') }}</span>
                                    <th class="px-4 py-3 text-center"><span>{{ __('R_Check_Up.doctor') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('psy_as_s.psy_asr') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('psy_as_s.dorm') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('psy_as_s.delicacies') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('psy_as_s.memory') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('psy_as_s.edgy_and_adenological') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('psy_as_s.ailment precognition') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('psy_as_s.direction_social') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('psy_as_s.proposals_and_recommendations') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('psy_as_s.notes_psy') }}</span></th>
                                </tr>
                            </thead>
                            @php
                                $i = 0;
                            @endphp
                            @forelse ($psy_ass as $psy_as)
                                <tbody class="border-l bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                                    <tr @if ($loop->odd) class="text-sm text-gray-600 dark:text-gray-400 text-gray-800 dark:text-gray-400 bg-gray-100 dark:bg-gray-800 hover:dark:bg-gray-700" @endif
                                        class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-400 hover:bg-gray-100 hover:dark:bg-gray-700">
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center text-xx dark:text-gray-400">
                                            {{ ++$i }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $psy_as->patient->name }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $psy_as->appointment_id }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $psy_as->user->name }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $psy_as->ps_as }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $psy_as->dorm }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $psy_as->delicacies }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $psy_as->memory }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $psy_as->edgy_and_adenological }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $psy_as->ailment_precognition }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $psy_as->direction_social }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $psy_as->proposals_and_recommendations }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $psy_as->notes_psy }}
                                        </td>
                                    </tr>
                                </tbody>
                            @empty
                                <tr>
                                    <td colspan="7"
                                        class="px-4 py-4 text-sm text-center text-gray-700 dark:text-gray-400">
                                        {{ __('app.No Data') }}</td>
                                </tr>
                            @endforelse
                        </table>
                    </div><br>
                    <div class="w-full border-l overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="bg-white w-full whitespace-no-wrap">
                            <thead>
                                <div class="bg-white px-4 py-5 sm:px-6">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900"><i
                                            class="fa-solid fa-suitcase-medical"></i>&nbsp;
                                        {{ __('app.social_Assess') }}
                                    </h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">With details.</p>
                                </div>
                                <tr class="text-sm font-medium leading-6 text-gray-900 border-y ltr:text-left rtl:text-right dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700/30">
                                    <th class="w-10 px-2 py-3 text-center">{{ __('app.id') }}</th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('Soc_as.patient') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('R_Check_Up.Appoitment') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('R_Check_Up.doctor') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('Soc_as.soc_as') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('Soc_as.monthly_incomes') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('Soc_as.incomes_source') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('Soc_as.living_kind') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('Soc_as.rent') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('Soc_as.master_name') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('Soc_as.master_phone') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('Soc_as.pre_infestation') }}</span></th>
                                    <th class="px-4 py-3 text-center"><span>{{ __('Soc_as.post_infestation') }}</span></th>
                                </tr>
                            </thead>
                            @php
                                $i = 0;
                            @endphp
                            @forelse ($soc_ass as $soc_as)
                                <tbody class="border-l bg-white divide-y dark:divide-gray-700 dark:bg-gray-900">
                                    <tr @if ($loop->odd) class="text-sm text-gray-600 dark:text-gray-400 text-gray-800 dark:text-gray-400 bg-gray-100 dark:bg-gray-800 hover:dark:bg-gray-700" @endif
                                        class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 hover:dark:text-gray-400 hover:bg-gray-100 hover:dark:bg-gray-700">
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center text-xx dark:text-gray-400">
                                            {{ ++$i }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $soc_as->patient->name }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $soc_as->appointment_id }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $soc_as->user->name }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $soc_as->so_as }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $soc_as->monthly_incomes }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $soc_as->incomes_source }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $soc_as->living_kind }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $soc_as->rent }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $soc_as->master_name }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $soc_as->master_phone }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $soc_as->pre_infestation }}
                                        </td>
                                        <td
                                            class="font-semibold text-gray-600 px-2 py-4 text-center dark:text-gray-400">
                                            {{ $soc_as->post_infestation }}
                                        </td>
                                    </tr>
                                </tbody>
                            @empty
                                <tr>
                                    <td colspan="7"
                                        class="px-4 py-4 text-sm text-center text-gray-700 dark:text-gray-400">
                                        {{ __('app.No Data') }}</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>

                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('users.index') }}">
                        <x-jet-secondary-button id="action_Button">
                            {{ __('pack') }}
                        </x-jet-secondary-button>
                    </x-jet-nav-link>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
