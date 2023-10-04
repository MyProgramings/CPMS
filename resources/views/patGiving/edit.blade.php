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
                        {{ __('app.update') }} {{ __('pat_givings.pat_givings') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('pat_givings.update', $pat_givings->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-2">
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="appointment_id" value="{{ __('app.Appoitment') }}" />
                        <x-jet-input type="text" readonly="true" name="appointment_id" id="appointment_id"
                            value="{{ $pat_givings->appointment_id }}" class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <x-jet-label for="patient_id"
                            value="{{ __('app.Patients') }}: {{ $pat_givings->patient->name }}" />
                        <x-jet-input type="text" readonly="true" name="patient_id" id="patient_id"
                            value="{{ $pat_givings->patient_id }}" class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="giver" value="{{ __('giver') }}" />
                        <x-jet-input type="text" readonly="true" name="giver" id="giver"
                            value="{{ Auth::user()->name }}" class="mt-1 block w-full" />
                    </div>
                    <br>
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <h1 class="text-lg font-semibold text-gray-600 ltr:text-left rtl:text-right dark:text-gray-400">
                            {{ __('Soc_as.Information_some_of_Patient') }}</h1>
                    </div><br>
                    <div></div><br>
                    <div></div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="bp" value="{{ __('pat_givings.bp') }}" />
                        <x-jet-input type="text" name="bp" id="bp" value="{{ __($pat_givings->bp) }}"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="bp" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="t" value="{{ __('pat_givings.t') }}" />
                        <x-jet-input type="text" name="t" id="t" value="{{ __($pat_givings->t) }}"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="t" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="p" value="{{ __('pat_givings.p') }}" />
                        <x-jet-input type="text" name="p" id="p" value="{{ __($pat_givings->p) }}"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="p" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="r" value="{{ __('pat_givings.r') }}" />
                        <x-jet-input type="text" name="r" id="r" value="{{ __($pat_givings->r) }}"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="r" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="pain" value="{{ __('pat_givings.pain') }}" />
                        <x-jet-input type="text" name="pain" id="pain"
                            value="{{ __($pat_givings->pain) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="pain" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="wt" value="{{ __('pat_givings.wt') }}" />
                        <x-jet-input type="text" name="wt" id="wt" value="{{ __($pat_givings->wt) }}"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="wt" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="ht" value="{{ __('pat_givings.ht') }}" />
                        <x-jet-input type="text" name="ht" id="ht"
                            value="{{ __($pat_givings->ht) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="ht" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="bsa" value="{{ __('pat_givings.bsa') }}" />
                        <x-jet-input type="text" name="bsa" id="bsa"
                            value="{{ __($pat_givings->bsa) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="bsa" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="VAD" value="{{ __('pat_givings.VAD') }}" />
                        <x-jet-input type="text" name="VAD" id="VAD"
                            value="{{ __($pat_givings->VAD) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="VAD" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="ES" value="{{ __('pat_givings.ES') }}" />
                        <x-jet-input type="text" name="ES" id="ES"
                            value="{{ __($pat_givings->ES) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="ES" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="cycle" value="{{ __('pat_givings.cycle') }}" />
                        <x-jet-input type="text" name="cycle" id="cycle"
                            value="{{ __($pat_givings->cycle) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="cycle" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="day" value="{{ __('pat_givings.day') }}" />
                        <x-jet-input type="text" name="day" id="day"
                            value="{{ __($pat_givings->day) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="day" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="referred_doctor" value="{{ __('pat_givings.referred_doctor') }}" />
                        <x-jet-input type="text" name="referred_doctor" id="referred_doctor"
                            value="{{ __($pat_givings->referred_doctor) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="referred_doctor" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="check_in" value="{{ __('pat_givings.check_in') }}" />
                        <x-select class="mt-1" name="check_in">
                            <option value="{{ $pat_givings->check_in }}" readonly="true" hidden="true">
                                {{ $pat_givings->check_in }}</option>
                            <option value="yes">{{ __('Yes') }}</option>
                            <option value="no">{{ __('No') }}</option>
                        </x-select>
                        <x-jet-input-error for="check_in" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="registry_sheet" value="{{ __('pat_givings.registry_sheet') }}" />
                        <x-select class="mt-1" name="registry_sheet">
                            <option value="{{ $pat_givings->registry_sheet }}" readonly="true" hidden="true">
                                {{ $pat_givings->registry_sheet }}</option>
                            <option value="yes">{{ __('Yes') }}</option>
                            <option value="no">{{ __('No') }}</option>
                        </x-select>
                        <x-jet-input-error for="registry_sheet" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="pathology_report" value="{{ __('pat_givings.pathology_report') }}" />
                        <x-select class="mt-1" name="pathology_report">
                            <option value="{{ $pat_givings->pathology_report }}" readonly="true" hidden="true">
                                {{ $pat_givings->pathology_report }}</option>
                            <option value="yes">{{ __('Yes') }}</option>
                            <option value="no">{{ __('No') }}</option>
                        </x-select>
                        <x-jet-input-error for="pathology_report" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="radiology_report" value="{{ __('pat_givings.radiology_report') }}" />
                        <x-select class="mt-1" name="radiology_report">
                            <option value="{{ $pat_givings->radiology_report }}" readonly="true" hidden="true">
                                {{ $pat_givings->radiology_report }}</option>
                            <option value="yes">{{ __('Yes') }}</option>
                            <option value="no">{{ __('No') }}</option>
                        </x-select>
                        <x-jet-input-error for="radiology_report" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="previous_ctx" value="{{ __('pat_givings.previous_ctx') }}" />
                        <x-select class="mt-1" name="previous_ctx">
                            <option value="{{ $pat_givings->previous_ctx }}" readonly="true" hidden="true">
                                {{ $pat_givings->previous_ctx }}</option>
                            <option value="yes">{{ __('Yes') }}</option>
                            <option value="no">{{ __('No') }}</option>
                        </x-select>
                        <x-jet-input-error for="previous_ctx" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="CTX_pre_date" value="{{ __('pat_givings.CTX_pre_date') }}" />
                        <x-jet-input type="date" name="CTX_pre_date" id="CTX_pre_date"
                            value="{{ __($pat_givings->CTX_pre_date) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="CTX_pre_date" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="ctx_previous_cycle_date"
                            value="{{ __('pat_givings.ctx_previous_cycle_date') }}" />
                        <x-select class="mt-1" name="ctx_previous_cycle_date">
                            <option value="{{ $pat_givings->ctx_previous_cycle_date }}" readonly="true"
                                hidden="true">{{ $pat_givings->ctx_previous_cycle_date }}</option>
                            <option value="yes">{{ __('Yes') }}</option>
                            <option value="no">{{ __('No') }}</option>
                        </x-select>
                        <x-jet-input-error for="ctx_previous_cycle_date" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="pre_ctx_lab_test" value="{{ __('pat_givings.pre_ctx_lab_test') }}" />
                        <x-select class="mt-1" name="pre_ctx_lab_test">
                            <option value="{{ $pat_givings->pre_ctx_lab_test }}" readonly="true" hidden="true">
                                {{ $pat_givings->pre_ctx_lab_test }}</option>
                            <option value="yes">{{ __('Yes') }}</option>
                            <option value="no">{{ __('No') }}</option>
                        </x-select>
                        <x-jet-input-error for="pre_ctx_lab_test" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="health_cente_visit" value="{{ __('pat_givings.health_cente_visit') }}" />
                        <x-select class="mt-1" name="health_cente_visit">
                            <option value="{{ $pat_givings->health_cente_visit }}" readonly="true" hidden="true">
                                {{ $pat_givings->health_cente_visit }}</option>
                            <option value="yes">{{ __('Yes') }}</option>
                            <option value="no">{{ __('No') }}</option>
                        </x-select>
                        <x-jet-input-error for="health_cente_visit" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="Inc_of_fever_bet_cyc"
                            value="{{ __('pat_givings.Inc_of_fever_bet_cyc') }}" />
                        <x-select class="mt-1" name="Inc_of_fever_bet_cyc">
                            <option value="{{ $pat_givings->Inc_of_fever_bet_cyc }}" readonly="true" hidden="true">
                                {{ $pat_givings->Inc_of_fever_bet_cyc }}</option>
                            <option value="yes">{{ __('Yes') }}</option>
                            <option value="no">{{ __('No') }}</option>
                        </x-select>
                        <x-jet-input-error for="Inc_of_fever_bet_cyc" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="If_yes_value" value="{{ __('pat_givings.If_yes_value') }}" />
                        <x-select class="mt-1" name="If_yes_value">
                            <option value="{{ $pat_givings->If_yes_value }}" readonly="true" hidden="true">
                                {{ $pat_givings->If_yes_value }}</option>
                            <option value="yes">{{ __('Yes') }}</option>
                            <option value="no">{{ __('No') }}</option>
                        </x-select>
                        <x-jet-input-error for="If_yes_value" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="Does_pthave_thermometer"
                            value="{{ __('pat_givings.Does_pthave_thermometer') }}" />
                        <x-select class="mt-1" name="Does_pthave_thermometer">
                            <option value="{{ $pat_givings->Does_pthave_thermometer }}" readonly="true"
                                hidden="true">{{ $pat_givings->Does_pthave_thermometer }}</option>
                            <option value="yes">{{ __('Yes') }}</option>
                            <option value="no">{{ __('No') }}</option>
                        </x-select>
                        <x-jet-input-error for="Does_pthave_thermometer" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2">
                        <x-jet-label for="new_complain" value="{{ __('pat_givings.new_complain') }}" />
                        <x-jet-input type="text" name="new_complain" id="new_complain"
                            value="{{ __($pat_givings->new_complain) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="new_complain" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-4">
                        <x-jet-label for="appointment_of_the_two_cycle"
                            value="{{ __('pat_givings.appointment_of_the_two_cycle') }}" />
                        <x-jet-input type="text" name="appointment_of_the_two_cycle"
                            id="appointment_of_the_two_cycle"
                            value="{{ __($pat_givings->appointment_of_the_two_cycle) }}"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="appointment_of_the_two_cycle" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-4">
                        <x-jet-label for="nursing_notes" value="{{ __('pat_givings.nursing_notes') }}" />
                        <x-jet-input type="text" name="nursing_notes" id="nursing_notes"
                            value="{{ __($pat_givings->nursing_notes) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="nursing_notes" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-4">
                        <x-jet-label for="doctor_note" value="{{ __('pat_givings.doctor_note') }}" />
                        <x-jet-input type="text" name="doctor_note" id="doctor_note"
                            value="{{ __($pat_givings->doctor_note) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="doctor_note" class="mt-2" />
                    </div>
                </div>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('pat_givings.index') }}">
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
