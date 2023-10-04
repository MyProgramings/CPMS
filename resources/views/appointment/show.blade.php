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
                        {{ __('app.show') }} {{ __('app.Appoitment') }}</h3>
                </div>
                <div class="ml-4">
                    @can('reports', \App\Models\Appointment::class)
                        <x-jet-secondary-button id="print_button">
                            <i class="fa-solid fa-print"></i>&nbsp;
                            {{ __('app.print') }}
                        </x-jet-secondary-button>
                    @endcan
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center" id="div_to_print">
        <div id="photo">
            <img src="{{ URL::asset('logocenter.PNG') }}" style="width: 100%; height: 180px;">
        </div>
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="relative grid grid-cols-6 gap-6 mt-2">
                <div class="col-span-1 md:col-span-2 lg:col-span-2">
                    <div
                        class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div
                            class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('appointment_s.reciption') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $appointment->reciption }}</div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-2">
                    <div
                        class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div
                            class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('appointment_s.doctor') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $appointment->doctor }}</div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-2">
                    <div
                        class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div
                            class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('appointment_s.patient') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $appointment->patient->name }}</div>
                    </div>
                </div>
            </div>
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
</x-app-layout>
