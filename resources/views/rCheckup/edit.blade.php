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
                        {{ __('app.update') }} {{ __('app.R_Check_Up') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('r_checkups.update', $r_checkups->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-2">
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="appointment_id" value="{{ __('R_Check_Up.Appoitment') }}" />
                        <x-jet-input type="text" readonly="true" name="appointment_id" id="appointment_id"
                            value="{{ $r_checkups->appointment_id }}" class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <x-jet-label for="patient_id"
                            value="{{ __('app.Patients') }}: {{ $r_checkups->patient->name }}" />
                        <x-jet-input type="text" readonly="true" name="patient_id" id="patient_id"
                            value="{{ $r_checkups->patient_id }}" class="mt-1 block w-full" />
                    </div>
                    @if (!(Auth::user()->role_id == 5))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="user_id" value="{{ __('R_Check_Up.doctor') }}: {{ $r_checkups->user->name }}" />
                            <x-jet-input type="text" readonly="true" name="user_id" id="user_id"
                                value="{{ $r_checkups->user_id }}" class="mt-1 block w-full" />
                        </div>
                    @endif
                    @if (!(Auth::user()->role_id == 4))
                        <div class="col-span-3 md:col-span-2 lg:col-span-1">
                            <x-jet-label for="laboratorie" value="{{ __('R_Check_Up.laboratory') }}" />
                            <x-jet-input type="text" readonly="true" name="laboratorie" id="laboratorie"
                                value="{{ Auth::user()->name }}" class="mt-1 block w-full" />
                        </div>
                    @endif
                    <div></div><br>
                    <br>
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <h1 class="text-lg font-semibold text-gray-600 ltr:text-left rtl:text-right dark:text-gray-400">
                            {{ __('Enter Check up') }}</h1>
                    </div><br>
                    <div></div><br>
                    <div></div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="list_checkup_id" value="{{ __('app.Check_Up') }}" />
                        <x-jet-input type="text" readonly="true" name="list_checkup_id" id="list_checkup_id"
                            value="{{ $r_checkups->list_checkup->name }}" class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="li_ch_det_id" value="{{ __('app.Check_Up_Details') }}" />
                        <x-jet-input type="text" readonly="true" name="li_ch_det_id" id="li_ch_det_id"
                            value="{{ $r_checkups->li_ch_det->name }}" class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="description_res" value="{{ __('R_Check_Up.description_res') }}" />
                        <x-jet-input type="text" name="description_res" id="description_res"
                            value="{{ $r_checkups->description_res }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="description_res" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-2">
                        <x-jet-label for="description_check" value="{{ __('R_Check_Up.description_check') }}" />
                        <x-jet-input type="text" name="description_check" id="description_check" :value="old('description_check')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="description_check" class="mt-2" />
                    </div>
                </div>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('r_checkups.index') }}">
                        <x-jet-secondary-button>
                            {{ __('back') }}
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
