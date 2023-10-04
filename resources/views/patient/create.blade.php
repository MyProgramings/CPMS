<x-app-layout>
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
                        {{ __('patient_s.Add_patient') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('patients.store') }}" method="POST">
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-2">

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="name" value="{{ __('patient_s.name') }}" />
                        <x-jet-input type="text" name="name" id="name" :value="old('name')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="name" class="mt-2" />
                    </div>
{{--
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="age" value="{{ __('patient_s.age') }}" />
                        <x-jet-input type="number" name="age" id="age" :value="old('age')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="age" class="mt-2" />
                    </div> --}}
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="gender" value="{{ __('patient_s.gender') }}" />
                        <x-select class="mt-1" name="gender">
                            <option value="{{ __(old('gender')) }}" readonly="true" hidden="true">
                                {{ __(old('gender')) }}</option>
                            <option value="male">{{ __('patient_s.Male') }}</option>
                            <option value="female">{{ __('patient_s.Female') }}</option>
                        </x-select>
                        <x-jet-input-error for="gender" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="Birthday" value="{{ __('patient_s.Birthday') }}" />
                        <x-jet-input type="date" name="Birthday" id="Birthday" :value="old('Birthday')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="Birthday" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="nationality" value="{{ __('patient_s.nationality') }}" />
                        <x-jet-input type="text" name="nationality" id="nationality" :value="old('nationality')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="nationality" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="permanent_address" value="{{ __('patient_s.permanent_address') }}" />
                        <x-jet-input type="text" name="permanent_address" id="permanent_address" :value="old('permanent_address')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="permanent_address" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="temporary_address" value="{{ __('patient_s.temporary_address') }}" />
                        <x-jet-input type="text" name="temporary_address" id="temporary_address" :value="old('temporary_address')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="temporary_address" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="phone_number" value="{{ __('patient_s.phone_number') }}" />
                        <x-jet-input type="text" name="phone_number" id="phone_number" :value="old('phone_number')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="phone_number" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="file_colors" value="{{ __('patient_s.file_colors') }}" />
                        <x-select name="file_colors" :value="old('file_colors')" class="mt-1 block w-full">
                            <option value="bg-white text-black" readonly="true">{{ __(old('file_colors')) }}</option>
                            <option value="bg-white text-black">{{ __('patient_s.White') }}</option>
                            <option value="bg-red-500 text-white">{{ __('patient_s.Red') }}</option>
                            <option value="bg-green-500 text-white">{{ __('patient_s.Green') }}</option>
                            <option value="bg-blue-500 text-white">{{ __('patient_s.Blue') }}</option>
                            <option value="bg-yellow-500 text-white">{{ __('patient_s.Yellow') }}</option>
                            <option value="bg-violet-500 text-white">{{ __('patient_s.Violet') }}</option>
                            <option value="bg-orange-500 text-white">{{ __('patient_s.Orange') }}</option>
                            <option value="bg-pink-500 text-white">{{ __('patient_s.Pink') }}</option>
                        </x-select>
                        <x-jet-input-error for="file_colors" class="mt-2" />
                    </div>
                    {{-- <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="file_number" value="{{ __('patient_s.file_number') }}" />
                        <x-jet-input type="text" name="file_number" id="file_number" :value="old('file_number')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="file_number" class="mt-2" />
                    </div> --}}
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="social_status" value="{{ __('patient_s.social_status') }}" />
                        <x-jet-input type="text" name="social_status" id="social_status" :value="old('social_status')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="social_status" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="place_of_birth" value="{{ __('patient_s.place_of_birth') }}" />
                        <x-jet-input type="text" name="place_of_birth" id="place_of_birth" :value="old('place_of_birth')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="place_of_birth" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="profession" value="{{ __('patient_s.profession') }}" />
                        <x-jet-input type="text" name="profession" id="profession" :value="old('profession')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="profession" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="card_number" value="{{ __('patient_s.card_number') }}" />
                        <x-jet-input type="text" name="card_number" id="card_number" :value="old('card_number')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="card_number" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="near_mosque" value="{{ __('patient_s.near_mosque') }}" />
                        <x-jet-input type="text" name="near_mosque" id="near_mosque" :value="old('near_mosque')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="near_mosque" class="mt-2" />
                    </div><br>
                    <div></div><br><div></div>
                    <div class="">
                        <x-jet-label for="trashed" value="{{ __('patient_s.previous_treatment') }}" />
                        <x-jet-checkbox name="previous_treatment" id="previous_treatment" :value="old('previous_treatment')"
                            class="block mt-3 w-7 h-7" />
                    </div>
                    <div class="">
                        <x-jet-label for="trashed" value="{{ __('patient_s.chemotherapy') }}" />
                        <x-jet-checkbox name="chemotherapy" id="chemotherapy" :value="old('chemotherapy')"
                            class="block mt-3 w-7 h-7" />
                    </div>
                    <div class="">
                        <x-jet-label for="trashed" value="{{ __('patient_s.radiotherapy') }}" />
                        <x-jet-checkbox name="radiotherapy" id="radiotherapy" :value="old('radiotherapy')"
                            class="block mt-3 w-7 h-7" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="trashed" value="{{ __('patient_s.surgery') }}" />
                        <x-jet-checkbox name="surgery" id="surgery" :value="old('surgery')"
                            class="block mt-3 w-7 h-7" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="trashed" value="{{ __('patient_s.is_smokeout') }}" />
                        <x-jet-checkbox name="is_smokeout" id="is_smokeout" :value="old('is_smokeout')"
                            class="block mt-3 w-7 h-7" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="trashed" value="{{ __('patient_s.is_khat') }}" />
                        <x-jet-checkbox name="is_khat" id="is_khat" value="false" class="block mt-3 w-7 h-7" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="trashed" value="{{ __('patient_s.is_chwingtobaco') }}" />
                        <x-jet-checkbox name="is_chwingtobaco" id="is_chwingtobaco" :value="old('is_chwingtobaco')"
                            class="block mt-3 w-7 h-7" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="site_of_tumor" value="{{ __('patient_s.site_of_tumor') }}" />
                        <x-jet-input type="text" name="site_of_tumor" id="site_of_tumor" :value="old('site_of_tumor')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="site_of_tumor" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="type_of_tumor" value="{{ __('patient_s.type_of_tumor') }}" />
                        <x-jet-input type="text" name="type_of_tumor" id="type_of_tumor" :value="old('type_of_tumor')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="type_of_tumor" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="doctors_name" value="{{ __('patient_s.doctors_name') }}" />
                        <x-jet-input type="text" name="doctors_name" id="doctors_name" :value="old('doctors_name')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="doctors_name" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="speciality" value="{{ __('patient_s.speciality') }}" />
                        <x-jet-input type="text" name="speciality" id="speciality" :value="old('speciality')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="speciality" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="reported_by" value="{{ __('patient_s.reported_by') }}" />
                        <x-jet-input type="text" name="reported_by" id="reported_by" :value="old('reported_by')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="reported_by" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="status" value="{{ __('patient_s.status') }}" />
                        <x-select class="mt-1" name="status">
                            <option value="{{ __(old('status')) }}" readonly="true" hidden="true">
                                {{ __(old('status')) }}</option>
                            <option value="live">{{ __('patient_s.live') }}</option>
                            <option value="dead">{{ __('patient_s.dead') }}</option>
                            <option value="recuperate">{{ __('patient_s.recuperate') }}</option>
                        </x-select>
                        <x-jet-input-error for="status" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="date_of_last_contact" value="{{ __('patient_s.date_of_last_contact') }}" />
                        <x-jet-input type="date" name="date_of_last_contact" id="date_of_last_contact"
                            :value="old('date_of_last_contact')" class="mt-1 block w-full" />
                        <x-jet-input-error for="date_of_last_contact" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="cause_of_death" value="{{ __('patient_s.cause_of_death') }}" />
                        <x-jet-input type="text" name="cause_of_death" id="cause_of_death" :value="old('cause_of_death')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="cause_of_death" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-4">
                        <x-jet-label for="notes_re" value="{{ __('patient_s.notes_re') }}" />
                        <x-jet-input type="text" name="notes_re" id="notes_re" :value="old('notes_re')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="notes_re" class="mt-2" />
                    </div>
                </div>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('patients.index') }}">
                        <x-jet-secondary-button>
                            {{ __('app.close') }}
                        </x-jet-secondary-button>
                    </x-jet-nav-link>
                    <x-jet-button type="submit" class="ltr:ml-3 rtl:mr-3">
                        {{ __('Save') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
