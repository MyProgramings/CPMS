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
                        {{ __('app.show') }} {{ __('app.R_Medicines') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('r_def_meds.store') }}" method="POST">
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-2">
                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="patient_id" value="{{ __('user.patient_id') }}" />
                        <x-jet-label value="{{ __($r_def_med->patient->name) }}" />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="doctor_id" value="{{ __('user.doctor_id') }}" />
                        <x-jet-label value="{{ __($r_def_med->user_id) }}" />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="appointment_id" value="{{ __('user.appointment_id') }}" />
                        <x-jet-label value="{{ __($r_def_med->appointment->name) }}" />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="pharmacist_id" value="{{ __('user.pharmacist_id') }}" />
                        <x-jet-label value="{{ __($r_def_med->pharmacist) }}" />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="preparer_id" value="{{ __('user.preparer_id') }}" />
                        <x-jet-label value="{{ __($r_def_med->preparer) }}" />
                    </div>
                    <br>
                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="medicine_type" value="{{ __('medicine_type') }}" />
                        <x-jet-label value="{{ __($r_def_med->medicine_type) }}" />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="inventoris_id" value="{{ __('user.medicine_name') }}" />
                        <x-jet-label value="{{ __($r_def_med->inventoris->name) }}" />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="quantity" value="{{ __('user.quantity') }}" />
                        <x-jet-label value="{{ __($r_def_med->quantity) }}" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-4">
                        <x-jet-label for="description_medic" value="{{ __('user.description_medic') }}" />
                        <x-jet-label value="{{ __($r_def_med->description_medic) }}" />
                    </div>
                </div>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('r_def_meds.index') }}">
                        <x-jet-secondary-button>
                            {{ __('Back') }}
                        </x-jet-secondary-button>
                    </x-jet-nav-link>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
