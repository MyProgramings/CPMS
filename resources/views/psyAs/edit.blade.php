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
                        {{ __('app.update') }} {{ __('psy_as_s.psy_as') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('psy_ass.update', $psy_ass->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-2">
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="appointment_id" value="{{ __('R_Check_Up.Appoitment') }}" />
                        <x-jet-input type="text" readonly="true" name="appointment_id" id="appointment_id"
                            value="{{ $psy_ass->appointment_id }}" class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <x-jet-label for="patient_id" value="{{ __('app.Patients') }}: {{ $psy_ass->patient->name }}" />
                        <x-jet-input type="text" readonly="true" name="patient_id" id="patient_id"
                            value="{{ $psy_ass->patient->id }}" class="mt-1 block w-full" />
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
                            <x-jet-label for="ps_as	" value="{{ __('app.psychological_Assess') }}" />
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
                        <x-select class="mt-1" name="dorm">
                            <option value="{{ $psy_ass->dorm }}" readonly="true" hidden="true">{{ $psy_ass->dorm }}
                            </option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="dorm" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="delicacies" value="{{ __('psy_as_s.delicacies') }}" />
                        <x-select class="mt-1" name="delicacies">
                            <option value="{{ $psy_ass->delicacies }}" readonly="true" hidden="true">
                                {{ $psy_ass->delicacies }}</option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="delicacies" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="memory" value="{{ __('psy_as_s.memory') }}" />
                        <x-select class="mt-1" name="memory">
                            <option value="{{ $psy_ass->memory }}" readonly="true" hidden="true">
                                {{ $psy_ass->memory }}</option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="memory" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="edgy_and_adenological" value="{{ __('psy_as_s.edgy_and_adenological') }}" />
                        <x-select class="mt-1" name="edgy_and_adenological">
                            <option value="{{ $psy_ass->edgy_and_adenological }}" readonly="true" hidden="true">
                                {{ $psy_ass->edgy_and_adenological }}</option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="edgy_and_adenological" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="ailment_precognition" value="{{ __('psy_as_s.ailment_precognition') }}" />
                        <x-select class="mt-1" name="ailment_precognition">
                            <option value="{{ $psy_ass->ailment_precognition }}" readonly="true" hidden="true">
                                {{ $psy_ass->ailment_precognition }}</option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="ailment_precognition" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="direction_social" value="{{ __('psy_as_s.direction_social') }}" />
                        <x-select class="mt-1" name="direction_social">
                            <option value="{{ $psy_ass->direction_social }}" readonly="true" hidden="true">
                                {{ $psy_ass->direction_social }}</option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="direction_social" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="thinking_in_Disease" value="{{ __('psy_as_s.thinking_in_Disease') }}" />
                        <x-jet-input type="text" name="thinking_in_Disease" id="thinking_in_Disease"
                            value="{{ __($psy_ass->thinking_in_Disease) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="thinking_in_Disease" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="medicament_traces" value="{{ __('psy_as_s.medicament_traces') }}" />
                        <x-jet-input type="text" name="medicament_traces" id="medicament_traces"
                            value="{{ __($psy_ass->medicament_traces) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="medicament_traces" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="psycho_traces" value="{{ __('psy_as_s.psycho_traces') }}" />
                        <x-select class="mt-1" name="psycho_traces" :value="old('psycho_traces')">
                            <option value="{{ $psy_ass->psycho_traces }}" readonly="true" hidden="true">
                                {{ $psy_ass->psycho_traces }}</option>
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
                            id="proposals_and_recommendations"
                            value="{{ __($psy_ass->proposals_and_recommendations) }}" class="mt-1 block w-full" />
                    </div>
                </div>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('psy_ass.index') }}">
                        <x-jet-secondary-button>
                            {{ __('Cancel') }}
                        </x-jet-secondary-button>
                    </x-jet-nav-link>
                    <x-jet-button type="submit" onclick="return confirm('Are you shur to Edit')"
                        class="ltr:ml-3 rtl:mr-3">
                        {{ __('Save') }}
                    </x-jet-button>

                </div>
            </form>
        </div>
    </div>
</x-app-layout>
