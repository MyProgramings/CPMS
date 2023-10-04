<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('psy_as_s.psy_as') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('app.show') }} {{ __('psy_as_s.psy_as') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="relative grid grid-cols-6 gap-6 mt-2">
                <div class="col-span-1 md:col-span-2 lg:col-span-2">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4  ltr:left-3 rtl:right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('appointment_s.patient') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $psy_ass->patient->name }}</div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4  ltr:left-3 rtl:right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('R_Check_Up.Appoitment') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $psy_ass->appointment_id }}</div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-2">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4  ltr:left-3 rtl:right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('psy_as_s.psy_asr') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $psy_ass->ps_as }}</div>
                    </div>
                </div><br>
                <div class="col-span-3 md:col-span-2 lg:col-span-2">
                    <h1 class="text-lg font-semibold text-gray-600 ltr:text-left rtl:text-right dark:text-gray-400">
                        {{ __('psy_as_s.after_disease') }}</h1>
                </div><br>
                <div></div><br>
                <div></div>
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4  ltr:left-3 rtl:right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('psy_as_s.dorm') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $psy_ass->dorm }}</div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4  ltr:left-3 rtl:right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('psy_as_s.delicacies') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $psy_ass->delicacies }}</div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4  ltr:left-3 rtl:right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('psy_as_s.memory') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $psy_ass->memory }}</div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4  ltr:left-3 rtl:right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('psy_as_s.edgy_and_adenological') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $psy_ass->edgy_and_adenological }}</div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4  ltr:left-3 rtl:right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('psy_as_s.ailment precognition') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $psy_ass->ailment_precognition }}</div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4  ltr:left-3 rtl:right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('psy_as_s.direction_social') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $psy_ass->direction_social }}</div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4  ltr:left-3 rtl:right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('psy_as_s.thinking_in_Disease') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $psy_ass->thinking_in_Disease }}</div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4  ltr:left-3 rtl:right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('psy_as_s.medicament_traces') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $psy_ass->medicament_traces }}</div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4  ltr:left-3 rtl:right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('psy_as_s.psycho_traces') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $psy_ass->psycho_traces }}</div>
                    </div>
                </div>
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4  ltr:left-3 rtl:right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">
                            {{ __('psy_as_s.proposals_and_recommendations') }}</div>
                        <div class=" text-sm font-bold z-10">{{ $psy_ass->proposals_and_recommendations }}</div>
                    </div>
                </div>
            </div>
            <div class="w-full px-0 overflow-hidden mt-7">
                <x-jet-nav-link href="{{ route('psy_ass.index') }}">
                    <x-jet-secondary-button>
                        {{ __('Back') }}
                    </x-jet-secondary-button>
                </x-jet-nav-link>
            </div>
        </div>
    </div>
</x-app-layout>
