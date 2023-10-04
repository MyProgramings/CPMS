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
                        {{ __('Update') }} {{ __('app.Appoitment') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('appointments.update', $appointments->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-2">
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label value="{{ __('reciption') }}" />
                        <x-jet-input type="text" name="reciption" readonly="true"
                            value="{{ $appointments->reciption }}" class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="user_id" value="{{ __('doctor') }}" />
                        <x-select class="mt-1" name="user_id" :value="old('user_id')">
                            <option value="{{ $appointments->user_id }}" readonly="true" hidden="true">
                                {{ $appointments->user->name }}</option>
                            @forelse($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @empty
                            @endforelse
                        </x-select>
                        <x-jet-input-error for="doctor" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="patient_id" value="{{ __('appointment_s.patient') }}" />
                        <x-select class="mt-1" name="patient_id" :value="old('patient_id')">
                            <option value="{{ $appointments->patient_id }}" readonly="true" hidden="true">
                                {{ $appointments->patient->name }}</option>
                            @forelse($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                            @empty
                            @endforelse
                        </x-select>
                        <x-jet-input-error for="patient_id" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-3">
                        <x-jet-label for="nots" value="{{ __('appointment_s.nots') }}" />
                        <x-jet-input type="text" name="nots" id="nots" value="{{ $appointments->nots }}"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="nots" class="mt-2" />
                    </div>
                    @can('update', $appointments)
                        @php
                            $checkup = 1;
                            $defconfirm_med = 1;
                            $defconfirm_prep = 1;
                            $is_not_chim = 0;
                            $check_ps_as = 1;
                            $check_so_as = 1;
                            $check_giving = 1;
                            foreach ($r_checkups as $r_checkup) {
                                if (!$r_checkup->description_res) {
                                    $checkup = 0;
                                }
                            }
                            foreach ($r_def_meds as $r_def_med) {
                                if (!$r_def_med->confirm_med) {
                                    $defconfirm_med = 0;
                                }
                            }
                            foreach ($r_def_meds as $r_def_med) {
                                if ($r_def_med->medicine_type == 'chemist' && !$r_def_med->confirm) {
                                    $defconfirm_prep = 0;
                                }
                            }
                            foreach ($psy_ass as $psy_as) {
                                if (!$psy_as->ps_as) {
                                    $check_ps_as = 0;
                                }
                            }
                            foreach ($soc_ass as $soc_as) {
                                if (!$soc_as->so_as) {
                                    $check_so_as = 0;
                                }
                            }
                            foreach ($pat_givings as $pat_giving) {
                                if (!$pat_giving->giver) {
                                    $check_giving = 0;
                                }
                            }
                        @endphp
                        @if ($checkup && $defconfirm_med && $defconfirm_prep && $check_ps_as && $check_so_as && $check_giving)
                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <x-jet-label for="close_appointment" value="{{ __('appointment_s.close_appointment') }}" />
                                <x-jet-checkbox name="close_appointment" id="close_appointment" :value="old('close_appointment')"
                                    class="block mt-3 w-7 h-7" />
                            </div>
                        @else
                            <div class="col-span-3 md:col-span-2 lg:col-span-3">
                                {{ __('appointment_s.To_close_appointment') }}
                            </div>
                        @endif
                    @endcan
                </div>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('appointments.index') }}">
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
