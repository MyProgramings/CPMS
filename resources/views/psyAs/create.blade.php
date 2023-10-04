<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('psy_as_s.psy_as') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('app.create') }} {{ __('psy_as_s.psy_as') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('psy_ass.store') }}" method="POST">
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-2">
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        @forelse($appointments as $appointment)
                            <x-jet-label for="appointment_id" value="{{ __('R_Check_Up.Appoitment') }}" />
                            <x-jet-input type="text" readonly="true" name="appointment_id" id="appointment_id"
                                value="{{ $appointment->id }}" class="mt-1 block w-full" />
                        @empty
                        @endforelse
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        @forelse($appointments as $appointment)
                            <x-jet-label for="patient_id"
                                value="{{ __('app.Patients') }}: {{ $appointment->patient->name }}" />
                            <x-jet-input type="text" readonly="true" name="patient_id" id="patient_id"
                                value="{{ $appointment->patient->id }}" class="mt-1 block w-full" />
                        @empty
                        @endforelse
                    </div>
                    @if (!(Auth::user()->role_id == 6) && !(Auth::user()->role_id == 7))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="doctor" value="{{ __('appointment_s.doctor') }}" />
                            <x-jet-input type="text" readonly="true" name="doctor" id="doctor"
                                value="{{ Auth::user()->name }}" class="mt-1 block w-full" />
                        </div>
                    @endif
                    @if (!(Auth::user()->role_id == 4) && !(Auth::user()->role_id == 7))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="ps_as	" value="{{ __('psy_as_s.psy_asr') }}" />
                            <x-jet-input type="text" readonly="true" name="ps_as" id="ps_as"
                                value="{{ Auth::user()->name }}" class="mt-1 block w-full" />
                        </div>
                    @endif
                    <br>
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <h1 class="text-lg font-semibold text-gray-600 ltr:text-left rtl:text-right dark:text-gray-400">
                            {{ __('psy_as_s.after_disease') }}</h1>
                    </div><br>
                    <div></div><br>
                    <div></div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="dorm" value="{{ __('psy_as_s.dorm') }}" />
                        <x-select class="mt-1" name="dorm" :value="old('dorm')">
                            <option value="{{ __(old('dorm')) }}" readonly="true" hidden="true">{{ __(old('dorm')) }}
                            </option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="dorm" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="delicacies" value="{{ __('psy_as_s.delicacies') }}" />
                        <x-select class="mt-1" name="delicacies" :value="old('delicacies')">
                            <option value="{{ __(old('delicacies')) }}" readonly="true" hidden="true">
                                {{ __(old('delicacies')) }}</option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="delicacies" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="memory" value="{{ __('psy_as_s.memory') }}" />
                        <x-select class="mt-1" name="memory" :value="old('memory')">
                            <option value="{{ __(old('memory')) }}" readonly="true" hidden="true">
                                {{ __(old('memory')) }}</option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="memory" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="edgy_and_adenological" value="{{ __('psy_as_s.edgy_and_adenological') }}" />
                        <x-select class="mt-1" name="edgy_and_adenological" :value="old('edgy_and_adenological')">
                            <option value="{{ __(old('edgy_and_adenological')) }}" readonly="true" hidden="true">
                                {{ __(old('edgy_and_adenological')) }}</option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="edgy_and_adenological" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="ailment_precognition" value="{{ __('psy_as_s.ailment precognition') }}" />
                        <x-select class="mt-1" name="ailment_precognition" :value="old('ailment_precognition')">
                            <option value="{{ __(old('ailment_precognition')) }}" readonly="true" hidden="true">
                                {{ __(old('ailment_precognition')) }}</option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="ailment_precognition" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="direction_social" value="{{ __('psy_as_s.direction_social') }}" />
                        <x-select class="mt-1" name="direction_social" :value="old('direction_social')">
                            <option value="{{ __(old('direction_social')) }}" readonly="true" hidden="true">
                                {{ __(old('direction_social')) }}</option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="direction_social" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="thinking_in_Disease" value="{{ __('psy_as_s.thinking_in_Disease') }}" />
                        <x-jet-input type="text" name="thinking_in_Disease" id="thinking_in_Disease"
                            :value="old('thinking_in_Disease')" class="mt-1 block w-full" />
                        <x-jet-input-error for="thinking_in_Disease" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="medicament_traces" value="{{ __('psy_as_s.medicament_traces') }}" />
                        <x-jet-input type="text" name="medicament_traces" id="medicament_traces" :value="old('medicament_traces')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="medicament_traces" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="psycho_traces" value="{{ __('psy_as_s.psycho_traces') }}" />
                        <x-select class="mt-1" name="psycho_traces" :value="old('psycho_traces')">
                            <option value="{{ __(old('psycho_traces')) }}" readonly="true" hidden="true">
                                {{ __(old('psycho_traces')) }}</option>
                            <option value="Fear">{{ __('Fear') }}</option>
                            <option value="Sorrow">{{ __('Sorrow') }}</option>
                            <option value="Tight">{{ __('Tight') }}</option>
                            <option value="Worry">{{ __('Worry') }}</option>
                            <option value="Dejection">{{ __('Dejection') }}</option>
                            <option value="Dispair">{{ __('Dispair') }}</option>
                        </x-select>
                        <x-jet-input-error for="psycho_traces" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-4">
                        <x-jet-label for="proposals_and_recommendations"
                            value="{{ __('psy_as_s.proposals_and_recommendations') }}" />
                        <x-jet-input type="text" name="proposals_and_recommendations"
                            id="proposals_and_recommendations" :value="old('proposals_and_recommendations')" class="mt-1 block w-full" />
                    </div>
                </div>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('psy_ass.index') }}">
                        <x-jet-secondary-button>
                            {{ __('Cancel') }}
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
