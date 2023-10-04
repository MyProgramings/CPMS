<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('app.R_Medicines') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('app.update') }} {{ __('app.R_Medicines') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('r_def_meds.update', $r_def_meds->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-2">
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="appointment_id" value="{{ __('R_Check_Up.Appoitment') }}" />
                        <x-jet-input type="text" readonly="true" name="appointment_id" id="appointment_id"
                            value="{{ $r_def_meds->appointment_id }}" class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <x-jet-label for="patient_id"
                            value="{{ __('app.Patients') }}: {{ $r_def_meds->patient->name }}" />
                        <x-jet-input type="text" readonly="true" name="patient_id" id="patient_id"
                            value="{{ $r_def_meds->patient_id }}" class="mt-1 block w-full" />
                    </div>
                    @if (!(Auth::user()->role_id == 6) && !(Auth::user()->role_id == 7))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="user_id" value="{{ __('appointment_s.doctor') }}: {{ $r_def_meds->user->name }}" />
                            <x-jet-input type="text" readonly="true" name="user_id" id="user_id"
                                value="{{ $r_def_meds->user_id }}" class="mt-1 block w-full" />
                        </div><br>
                    @endif
                    @if (!(Auth::user()->role_id == 7) && !(Auth::user()->role_id == 4))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="pharmacist" value="{{ __('r_def_meds.pharmacist') }}" />
                            <x-jet-input type="text" readonly="true" name="pharmacist" id="pharmacist"
                                value="{{ Auth::user()->name }}" class="mt-1 block w-full" />
                        </div>
                    @endif
                    @if (!(Auth::user()->role_id == 6) && !(Auth::user()->role_id == 1) && !(Auth::user()->role_id == 4))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="pharmacist" value="{{ __('pharmacist') }}" />
                            <x-jet-input type="text" readonly="true" name="pharmacist" id="pharmacist"
                                value="{{ $r_def_meds->pharmacist }}" class="mt-1 block w-full" />
                        </div>
                    @endif
                    @if (!(Auth::user()->role_id == 4) && !(Auth::user()->role_id == 6))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="preparer" value="{{ __('r_def_meds.preparer') }}" />
                            <x-jet-input type="text" readonly="true" name="preparer" id="preparer"
                                value="{{ Auth::user()->name }}" class="mt-1 block w-full" />
                        </div>
                    @endif
                    @if (!(Auth::user()->role_id == 7) && !(Auth::user()->role_id == 1) && !(Auth::user()->role_id == 4))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="preparer" value="{{ __('preparer') }}" />
                            <x-jet-input type="text" readonly="true" name="preparer" id="preparer"
                                value="{{ $r_def_meds->preparer }}" class="mt-1 block w-full" />
                        </div>
                    @endif

                    <div></div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="medicine_type" value="{{ __('inventorys_s.medicine_type') }}" />
                        <x-jet-input type="text" readonly="true" name="medicine_type" id="medicine_type"
                            value="{{ $r_def_meds->medicine_type }}" class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label value="{{ __('inventorys_s.name') }}" />
                        <x-jet-input type="text" readonly="true" value="{{ $r_def_meds->inventoris->name }}"
                            class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label value="{{ __('inventorys_s.quantity') }}" />
                        <x-jet-input type="text" readonly="true" value="{{ $r_def_meds->quantity }} {{ __('-') }}{{ $r_def_meds->inventoris->medicines_shape }} {{ $r_def_meds->inventoris->power }}"
                            class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label value="{{ __('r_def_meds.each_day') }}" />
                        <x-jet-input type="text" readonly="true" value="{{ $r_def_meds->each_day }} {{ __('times') }}"
                            class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label value="{{ __('r_def_meds.duration') }}" />
                        <x-jet-input type="text" readonly="true" value="{{ $r_def_meds->duration }} {{ __('days') }}"
                            class="mt-1 block w-full" />
                    </div>
                    @can('delete', \App\Models\R_def_med::class)
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="confirm_med" value="{{ __('r_def_meds.confirm_med') }}" />
                            <x-jet-checkbox name="confirm_med" id="confirm_med" :value="old('confirm_med')"
                                class="block mt-3 w-7 h-7" />
                        </div>
                    @endcan
                    @if (!(Auth::user()->role_id == 4) && !(Auth::user()->role_id == 6))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="confirm" value="{{ __('r_def_meds.confirm') }}" />
                            <x-jet-checkbox name="confirm" id="confirm" :value="old('confirm')"
                                class="block mt-3 w-7 h-7" />
                        </div>
                    @endif
                    <div class="col-span-3 md:col-span-2 lg:col-span-4">
                        <x-jet-label for="description_medic" value="{{ __('r_def_meds.description_medic') }}" />
                        <x-jet-input type="text" name="description_medic" id="description_medic"
                            value="{{ __($r_def_meds->description_medic) }}" class="mt-1 block w-full" />
                    </div>
                </div>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('r_def_meds.index') }}">
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
    <script>
        // $(document).ready(function() {
        //     $('#medicine_type').on('change', function() {
        //         var medicine_type = $(this).val();
        //         if (medicine_type) {
        //             $.ajax({
        //                 url: "{{ URL::to('r_def_med') }}/" + medicine_type,
        //                 type: "GET",
        //                 dataType: "json",
        //                 success: function(data) {
        //                     console.log('success', medicine_type)
        //                     $('select[name="inventoris_id"]').empty();
        //                     $.each(data, function(key, value) {
        //                         $('select[name="inventoris_id"]').append('<option value="' +
        //                             key + '">' + value + '</option>');
        //                     });
        //                 },
        //             });
        //         } else {
        //             console.log('AJAX load did not work');
        //         }
        //     });
        // });
    </script>
</x-app-layout>
