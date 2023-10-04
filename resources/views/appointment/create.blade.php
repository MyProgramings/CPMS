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
                        {{ __('app.create') }} {{ __('app.Appoitment') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('appointments.store') }}" method="POST">
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-2">
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="reciption" value="{{ __('appointment_s.reciption') }}" />
                        <x-jet-input type="text" name="reciption" id="reciption" readonly="true"
                            value="{{ Auth::user()->name }}" class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="patient_id" value="{{ __('appointment_s.patient') }}" />
                        <x-select class="mt-1" name="patient_id" :value="old('patient_id')">
                            <option value="{{ __(old('patient_id')) }}" readonly="true" hidden="true">
                                {{ __(old('patient_id')) }}</option>
                            @forelse($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                            @empty
                            @endforelse
                        </x-select>
                        <x-jet-input-error for="patient_id" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="user_id" value="{{ __('appointment_s.doctor') }}" />
                        <x-select class="mt-1" name="user_id" :value="old('user_id')">
                            <option value="{{ __(old('user_id')) }}" readonly="true" hidden="true">
                                {{ __(old('user_id')) }}</option>
                            @forelse($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @empty
                            @endforelse
                        </x-select>
                        <x-jet-input-error for="user_id" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="Add_pat_givings" value="{{ __('pat_givings.Add_pat_givings') }}" />
                        <x-jet-checkbox name="Add_pat_givings" id="Add_pat_givings" :value="old('Add_pat_givings')"
                            class="block mt-3 w-7 h-7" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-3">
                        <x-jet-label for="nots" value="{{ __('appointment_s.nots') }}" />
                        <x-jet-input type="text" name="nots" id="nots" :value="old('nots')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="nots" class="mt-2" />
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

</x-app-layout>
