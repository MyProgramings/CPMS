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
                        {{ __('app.create') }} {{ __('app.R_Medicines') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('r_def_meds.store') }}" method="POST">
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
                            <x-jet-label for="user_id" value="{{ __('appointment_s.doctor') }}: {{ Auth::user()->name }}" />
                            <x-jet-input type="text" readonly="true" name="user_id" id="user_id"
                                value="{{ Auth::user()->id }}" class="mt-1 block w-full" />
                        </div>
                    @endif
                    <br>
                    <div></div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="medicine_type" value="{{ __('inventorys_s.medicine_type') }}" />
                        <x-select class="mt-1" name="medicine_type" id="medicine_type">
                            <option value="{{ __(old('medicine_type')) }}" readonly="true" hidden="true">
                                {{ __(old('medicine_type')) }}</option>
                            <option value="supplementary">{{ __('supplementary') }}</option>
                            <option value="chemist">{{ __('chemist') }}</option>
                        </x-select>
                        <x-jet-input-error for="medicine_type" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="inventoris_id" value="{{ __('inventorys_s.name') }}" />
                        <x-select class="mt-1" name="inventoris_id" id="inventoris_id"></x-select>
                        <x-jet-input-error for="inventoris_id" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="quantity" value="{{ __('inventorys_s.quantity') }}" />
                        <x-jet-input type="number" name="quantity" id="quantity" :value="old('quantity')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="quantity" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="each_day" value="{{ __('r_def_meds.each_day') }}" />
                        <x-select class="mt-1" name="each_day" id="each_day">
                            <option value="{{ __(old('each_day')) }}" readonly="true" hidden="true">
                                {{ __(old('each_day')) }}</option>
                            <option value="1">{{ __('مره') }}</option>
                            <option value="2">{{ __('مرتين') }}</option>
                            <option value="3">{{ __('ثلات مرات') }}</option>
                            <option value="4">{{ __('أربع مرات') }}</option>
                        </x-select>
                        <x-jet-input-error for="each_day" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="duration" value="{{ __('r_def_meds.duration') }}" />
                        <x-jet-input type="number" name="duration" id="duration" :value="old('duration')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="duration" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-4">
                        <x-jet-label for="description_medic" value="{{ __('r_def_meds.description_medic') }}" />
                        <x-jet-input type="text" name="description_medic" id="description_medic" :value="old('description_medic')"
                            class="mt-1 block w-full" />
                    </div>
                </div>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('appointments.index') }}">
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
        $(document).ready(function() {
            $('#medicine_type').on('change', function() {
                var medicine_type = $(this).val();
                if (medicine_type) {
                    $.ajax({
                        url: "{{ URL::to('r_def_med') }}/" + medicine_type,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            // console.log(data)
                            $('select[name="inventoris_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="inventoris_id"]').append(
                                    '<option value="' +
                                    key + '">' + key + " "+ '&nbsp;' + value + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
</x-app-layout>
