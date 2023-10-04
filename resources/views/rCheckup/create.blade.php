<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('app.R_Check_Up') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('app.create') }} {{ __('app.R_Check_Up') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('r_checkups.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-4">
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
                    @if (!(Auth::user()->role_id == 5))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="user_id" value="{{ __('R_Check_Up.doctor') }}: {{ Auth::user()->name }}" />
                            <x-jet-input type="text" readonly="true" name="user_id" id="user_id"
                                value="{{ Auth::user()->id }}" class="mt-1 block w-full" />
                        </div>
                    @endif
                    {{-- @if (!(Auth::user()->role_id == 4))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="laboratorie" value="{{ __('R_Check_Up.laboratory') }}" />
                            <x-jet-input type="text" readonly="true" name="laboratorie" id="laboratorie"
                                value="{{ Auth::user()->name }}" class="mt-1 block w-full" />
                        </div>
                    @endif --}}
                </div>
                <table class="rounded-lg shadow-lg bg-white" style="background-color: #ffffff; color: white;">
                    <tr>
                        <div class="relative grid grid-cols-6 gap-6 mt-4 ">
                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <th class="Head">
                                    <x-jet-label for="list_checkup_id" value="{{ __('app.Check_Up') }}" />
                                </th>
                            </div>
                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <th>
                                    <x-jet-label for="li_ch_det_id" value="{{ __('app.Check_Up_Details') }}" />
                                </th>
                            </div>
                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <th>
                                    <x-jet-label for="description_res"
                                        value="{{ __('R_Check_Up.description_res') }}" />
                                </th>
                            </div>
                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <th>
                                    <x-jet-label for="description_check"
                                        value="{{ __('R_Check_Up.description_check') }}" />
                                </th>
                            </div>
                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <th></th>
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <div class="relative grid grid-cols-6 gap-6 mt-4">
                            <div class="col-span-3 md:col-span-2 lg:col-span-2">
                                <td>
                                    <x-select class="mt-1" name="list_checkup_id" id="list_checkup_id">
                                        <option value="{{ __(old('list_checkup_id')) }}" readonly="true"
                                            hidden="true">{{ __(old('list_checkup_id')) }}</option>
                                        @forelse($list_checkups as $list_checkup)
                                            <option value="{{ $list_checkup->id }}">
                                                {{ $list_checkup->name }}</option>
                                        @empty
                                        @endforelse
                                    </x-select>
                                    <x-jet-input-error for="list_checkup_id" class="mt-2" />
                                </td>
                            </div>
                            <div class="col-span-3 md:col-span-2 lg:col-span-1 mt-1 block w-full">
                                <td>
                                    <x-select class="mt-1" name="li_ch_det_id" id="li_ch_det_id">
                                    </x-select>
                                    <x-jet-input-error for="li_ch_det_id" class="mt-2" />
                                </td>
                            </div>
                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <td>
                                    <x-jet-input type="text" readonly="true" name="description_res"
                                        id="description_res" :value="old('description_res')" class="mt-1 block w-full" />
                                    <x-jet-input-error for="description_res" class="mt-2" />
                                </td>
                            </div>
                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <td>
                                    <x-jet-input type="text" name="description_check" id="description_check"
                                        :value="old('description_check')" class="mt-1 block w-full" />
                                    <x-jet-input-error for="description_check" class="mt-2" />
                                </td>
                            </div>
                            <div class="col-span-3 md:col-span-2 lg:col-span-1">
                                <td>
                                    <x-jet-button type="submit" class="ltr:ml-3 rtl:mr-3">
                                        {{ __('Save') }}
                                    </x-jet-button>
                                </td>
                            </div>
                        </div>
                    </tr>
                </table>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('appointments.index') }}">
                        <x-jet-secondary-button>
                            {{ __('Back') }}
                        </x-jet-secondary-button>
                    </x-jet-nav-link>

                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#list_checkup_id').on('change', function() {
                var list_checkup_id = $(this).val();
                if (list_checkup_id) {
                    console.log('change is firing', list_checkup_id)
                    $.ajax({
                        url: "{{ URL::to('r_checkup') }}/" + list_checkup_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            console.log('success', list_checkup_id)
                            $('select[name="li_ch_det_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="li_ch_det_id"]').append(
                                    '<option value="' +
                                    key + '">' + value + '</option>');
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
