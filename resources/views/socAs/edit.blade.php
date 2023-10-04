<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('app.social_Assess') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('app.update') }} {{ __('app.social_Assess') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('soc_ass.update', $soc_ass->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-2">
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="appointment_id" value="{{ __('R_Check_Up.Appoitment') }}" />
                        <x-jet-input type="text" readonly="true" name="appointment_id" id="appointment_id"
                            value="{{ $soc_ass->appointment_id }}" class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <x-jet-label for="patient_id" value="{{ __('app.Patients') }}: {{ $soc_ass->patient->name }}" />
                        <x-jet-input type="text" readonly="true" name="patient_id" id="patient_id"
                            value="{{ $soc_ass->patient->id }}" class="mt-1 block w-full" />
                    </div>
                    @if (!(Auth::user()->role_id == 9))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="doctor" value="{{ __('appointment_s.doctor') }}" />
                            <x-jet-input type="text" readonly="true" name="doctor" id="doctor"
                                value="{{ Auth::user()->name }}" class="mt-1 block w-full" />
                        </div>
                    @endif
                    @if (!(Auth::user()->role_id == 4))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="so_as	" value="{{ __('Soc_as.soc_as') }}" />
                            <x-jet-input type="text" readonly="true" name="so_as" id="so_as"
                                value="{{ Auth::user()->name }}" class="mt-1 block w-full" />
                        </div>
                    @endif
                    <br>
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <h1 class="text-lg font-semibold text-gray-600 ltr:text-left rtl:text-right dark:text-gray-400">
                            {{ __('Soc_as.Information_some_of_Patient') }}</h1>
                    </div><br>
                    <div></div><br>
                    <div></div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="monthly_incomes" value="{{ __('soc_as.monthly_incomes') }}" />
                        <x-jet-input type="text" name="monthly_incomes" id="monthly_incomes"
                            value="{{ __($soc_ass->monthly_incomes) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="monthly_incomes" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="incomes_source" value="{{ __('soc_as.incomes_source') }}" />
                        <x-select class="mt-1" name="incomes_source">
                            <option value="{{ $soc_ass->incomes_source }}" readonly="true" hidden="true">
                                {{ $soc_ass->incomes_source }}</option>
                            <option value="Salary">{{ __('Salary') }}</option>
                            <option value="Worker">{{ __('Worker') }}</option>
                            <option value="Merchantly">{{ __('Merchantly') }}</option>
                            <option value="Farm">{{ __('Farm') }}</option>
                            <option value="Others">{{ __('Others') }}</option>
                            <option value="No more">{{ __('No more') }}</option>
                        </x-select>
                        <x-jet-input-error for="incomes_source" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="living_kind" value="{{ __('soc_as.living_kind') }}" />
                        <x-select class="mt-1" name="living_kind">
                            <option value="{{ $soc_ass->living_kind }}" readonly="true" hidden="true">
                                {{ $soc_ass->living_kind }}</option>
                            <option value="Villa">{{ __('Villa') }}</option>
                            <option value="A-flat">{{ __('A-flat') }}</option>
                            <option value="Popular home">{{ __('Popular home') }}</option>
                            <option value="Shantly">{{ __('Shantly') }}</option>
                            <option value="Own">{{ __('Own') }}</option>
                            <option value="No more">{{ __('No more') }}</option>
                        </x-select>
                        <x-jet-input-error for="living_kind" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="rent" value="{{ __('soc_as.rent') }}" />
                        <x-jet-input type="text" name="rent" id="rent" value="{{ __($soc_ass->rent) }}"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="rent" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="master_name" value="{{ __('soc_as.master_name') }}" />
                        <x-jet-input type="text" name="master_name" id="master_name"
                            value="{{ __($soc_ass->master_name) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="master_name" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="master_phone" value="{{ __('soc_as.master_phone') }}" />
                        <x-jet-input type="text" name="master_phone" id="master_phone"
                            value="{{ __($soc_ass->master_phone) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="master_phone" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <h1
                            class="text-lg font-semibold text-gray-600 ltr:text-left rtl:text-right dark:text-gray-400">
                            {{ __('soc_as.Sociologist_date_and_infirmity_develops') }}</h1>
                    </div><br>
                    <div></div><br>
                    <div></div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="pre_infestation" value="{{ __('soc_as.pre_infestation') }}" />
                        <x-select class="mt-1" name="pre_infestation">
                            <option value="{{ $soc_ass->pre_infestation }}" readonly="true" hidden="true">
                                {{ $soc_ass->pre_infestation }}</option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="pre_infestation" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="post_infestation" value="{{ __('soc_as.post_infestation') }}" />
                        <x-select class="mt-1" name="post_infestation">
                            <option value="{{ $soc_ass->post_infestation }}" readonly="true" hidden="true">
                                {{ $soc_ass->post_infestation }}</option>
                            <option value="Good">{{ __('Good') }}</option>
                            <option value="Bad">{{ __('Bad') }}</option>
                            <option value="Medium">{{ __('Medium') }}</option>
                        </x-select>
                        <x-jet-input-error for="post_infestation" class="mt-2" />
                    </div>
                    <br>
                    <div></div><br>
                    <div></div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <h1
                            class="text-lg font-semibold text-gray-600 ltr:text-left rtl:text-right dark:text-gray-400">
                            {{ __('Soc_as.other_infestation_from_family') }}</h1>
                    </div><br>
                    <div></div><br>
                    <div></div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="other_infestation_from_family"
                            value="{{ __('soc_as.other_infestation_from_family') }}" />
                        <x-select class="mt-1" name="other_infestation_from_family">
                            <option value="{{ $soc_ass->other_infestation_from_family }}" readonly="true"
                                hidden="true">
                                {{ $soc_ass->other_infestation_from_family }}</option>
                            <option value="yes">{{ __('Yes') }}</option>
                            <option value="no">{{ __('No') }}</option>
                        </x-select>
                        <x-jet-input-error for="other_infestation_from_family" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="infestation_date" value="{{ __('soc_as.infestation_date') }}" />
                        <x-jet-input type="date" name="infestation_date" id="infestation_date"
                            value="{{ __($soc_ass->infestation_date) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="infestation_date" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="disease_kind" value="{{ __('soc_as.disease_kind') }}" />
                        <x-jet-input type="text" name="disease_kind" id="disease_kind"
                            value="{{ __($soc_ass->disease_kind) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="disease_kind" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="traveling" value="{{ __('soc_as.traveling') }}" />
                        <x-select class="mt-1" name="traveling">
                            <option value="{{ $soc_ass->traveling }}" readonly="true" hidden="true">
                                {{ $soc_ass->traveling }}</option>
                            <option value="yes">{{ __('Yes') }}</option>
                            <option value="no">{{ __('No') }}</option>
                        </x-select>
                        <x-jet-input-error for="traveling" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="problem_rating" value="{{ __('soc_as.problem_rating') }}" />
                        <x-select class="mt-1" name="problem_rating">
                            <option value="{{ $soc_ass->problem_rating }}" readonly="true" hidden="true">
                                {{ $soc_ass->problem_rating }}</option>
                            <option value="simple">{{ __('Simple') }}</option>
                            <option value="complex">{{ __('Complex') }}</option>
                        </x-select>
                        <x-jet-input-error for="problem_rating" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="Doctor_view_of_patient"
                            value="{{ __('soc_as.Doctor_view_of_patient') }}" />
                        <x-select class="mt-1" name="Doctor_view_of_patient">
                            <option value="{{ $soc_ass->Doctor_view_of_patient }}" readonly="true" hidden="true">
                                {{ $soc_ass->Doctor_view_of_patient }}</option>
                            <option value="Intercipent">{{ __('Intercipent') }}</option>
                            <option value="Cultured">{{ __('Cultured') }}</option>
                            <option value="UnIntercipent">{{ __('UnIntercipent') }}</option>
                            <option value="Disorderly">{{ __('Disorderly') }}</option>
                        </x-select>
                        <x-jet-input-error for="Doctor_view_of_patient" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-4">
                        <x-jet-label for="sociologist_appreciations"
                            value="{{ __('soc_as.sociologist_appreciations') }}" />
                        <x-jet-input type="text" name="sociologist_appreciations" id="sociologist_appreciations"
                            value="{{ __($soc_ass->sociologist_appreciations) }}" class="mt-1 block w-full" />
                    </div>
                </div>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('soc_ass.index') }}">
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
