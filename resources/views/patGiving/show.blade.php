<x-app-layout>
    <x-slot name="header">
        <h2>
            <i class="fa-solid fa-syringe"></i> {{ __('pat_givings.pat_givings') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('app.show') }} {{ __('pat_givings.pat_givings') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="relative grid grid-cols-6 gap-6 mt-2">

                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.name') }}" />
                    <x-jet-label value="{{ __($pat_giving->name) }}" />

                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.giver_id') }}" />
                    <x-jet-label value="{{ $pat_giving->giver_id }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.patient_id') }}" />
                    <x-jet-label value="{{ $pat_giving->patient_id }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.bp') }}" />
                    <x-jet-label value="{{ __($pat_giving->bp) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.t') }}" />
                    <x-jet-label value="{{ __($pat_giving->t) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.p') }}" />
                    <x-jet-label value="{{ __($pat_giving->p) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.r') }}" />
                    <x-jet-label value="{{ __($pat_giving->r) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.pain') }}" />
                    <x-jet-label value="{{ __($pat_giving->pain) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.wt') }}" />
                    <x-jet-label value="{{ __($pat_giving->wt) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.ht') }}" />
                    <x-jet-label value="{{ __($pat_giving->ht) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.bsa') }}" />
                    <x-jet-label value="{{ __($pat_giving->bsa) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.VAD') }}" />
                    <x-jet-label value="{{ __($pat_giving->VAD) }}" />

                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label for="ES" value="{{ __('pat_givings.ES') }}" />
                    <x-jet-label value="{{ __($pat_giving->ES) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.cycle') }}" />
                    <x-jet-label value="{{ __($pat_giving->cycle) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.day') }}" />
                    <x-jet-label value="{{ __($pat_giving->day) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.referred_doctor') }}" />
                    <x-jet-label value="{{ __($pat_giving->referred_doctor) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.check_in') }}" />
                    <x-jet-label value="{{ $pat_giving->check_in }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.registry_sheet') }}" />
                    <x-jet-label value="{{ $pat_giving->registry_sheet }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.pathology_report') }}" />
                    <x-jet-label value="{{ $pat_giving->pathology_report }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.radiology_report') }}" />
                    <x-jet-label value="{{ $pat_giving->radiology_report }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.previous_ctx') }}" />
                    <x-jet-label value="{{ $pat_giving->previous_ctx }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.CTX_pre_date') }}" />
                    <x-jet-label value="{{ __($pat_giving->CTX_pre_date) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.ctx_previous_cycle_date') }}" />
                    <x-jet-label value="{{ $pat_giving->ctx_previous_cycle_date }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.pre_ctx_lab_test') }}" />
                    <x-jet-label value="{{ $pat_giving->pre_ctx_lab_test }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.health_cente_visit') }}" />
                    <x-jet-label value="{{ $pat_giving->health_cente_visit }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.Inc_of_fever_bet_cyc') }}" />
                    <x-jet-label value="{{ $pat_giving->Inc_of_fever_bet_cyc }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.If_yes_value') }}" />
                    <x-jet-label value="{{ $pat_giving->If_yes_value }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.Does_pthave_thermometer') }}" />
                    <x-jet-label value="{{ $pat_giving->Does_pthave_thermometer }}" />
                </div>
                <div class="col-span-3 md:col-span-2">
                    <x-jet-label value="{{ __('pat_givings.new_complain') }}" />
                    <x-jet-label value="{{ __($pat_giving->new_complain) }}" />
                </div>
                <div class="col-span-3 md:col-span-2 lg:col-span-4">
                    <x-jet-label value="{{ __('user.appointment_of_the_two_cycle') }}" />
                    <x-jet-label value="{{ __($pat_giving->appointment_of_the_two_cycle) }}" />
                </div>
                <div class="col-span-3 md:col-span-2 lg:col-span-4">
                    <x-jet-label value="{{ __('user.nursing_notes') }}" />
                    <x-jet-label value="{{ __($pat_giving->nursing_notes) }}" />
                </div>
                <div class="col-span-3 md:col-span-2 lg:col-span-4">
                    <x-jet-label value="{{ __('user.doctor_note') }}" />
                    <x-jet-label value="{{ __($pat_giving->doctor_note) }}" />
                </div>
            </div>
            <div class="w-full px-0 overflow-hidden mt-7">
                <x-jet-nav-link href="{{ route('pat_givings.index') }}">
                    <x-jet-secondary-button>
                        {{ __('Back') }}
                    </x-jet-secondary-button>
                </x-jet-nav-link>
            </div>
            </form>
        </div>
    </div>
</x-app-layout>
