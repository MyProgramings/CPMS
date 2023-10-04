<style>
    #customers {
        border-collapse: collapse;
        width: 100%;
        background-color: #ffffff;
    }

    #customers td,
    #customers th {
        border: 1px solid rgb(243, 242, 242);
        padding: 15px 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: rgb(255, 255, 255);
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h3>
            {{ __('app.social_Assess') }}
        </h3>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300">{{ __('app.show') }}
                        {{ __('app.social_Assess') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <table id="customers">
                <tr>
                    <td>
                        <x-jet-label value="{{ __('Soc_as.soc_as') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ $soc_ass->so_as }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __('Soc_as.patient') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ $soc_ass->patient->name }}" />
                    </td>
                </tr>
            </table>
            <table id="customers">
                <tr>
                    <td>
                        <h1 class="text-lg font-semibold text-gray-600 ltr:text-left rtl:text-right dark:text-gray-400">
                            {{ __('soc_as.Information_some_of_Patient') }}</h1>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table id="customers">
                <tr>
                    <td>
                        <x-jet-label value="{{ __('Soc_as.soc_ass') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __($soc_ass->name) }}" />
                    </td>
                    <td>
                        <x-jet-label />
                    </td>
                    <td>
                        <x-jet-label />
                    </td>
                </tr>
                <tr>
                    <td>
                        <x-jet-label value="{{ __('soc_as.monthly_incomes') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __($soc_ass->monthly_incomes) }}" />
                    </td>
                    <td>
                        <x-jet-label for="incomes_source" value="{{ __('soc_as.incomes_source') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ $soc_ass->incomes_source }}" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <x-jet-label value="{{ __('soc_as.living_kind') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ $soc_ass->living_kind }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __('soc_as.rent') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __($soc_ass->rent) }}" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <x-jet-label value="{{ __('soc_as.master_name') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __($soc_ass->master_name) }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __('soc_as.master_phone') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __($soc_ass->master_phone) }}" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <x-jet-label value="{{ __('soc_as.pre_infestation') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ $soc_ass->pre_infestation }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __('soc_as.post_infestation') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ $soc_ass->post_infestation }}" />
                    </td>
                </tr>
            </table>
            <table id="customers">
                <tr>
                    <td>
                        <h1 class="text-lg font-semibold text-gray-600 ltr:text-left rtl:text-right dark:text-gray-400">
                            {{ __('soc_as.Sociologist_date_and_infirmity_develops') }}</h1>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table id="customers">
                <tr>
                    <td>
                        <x-jet-label value="{{ __('soc_as.infestation_date') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __($soc_ass->infestation_date) }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __('soc_as.traveling') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ $soc_ass->traveling }}" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <x-jet-label value="{{ __('soc_as.other_infestation_from_family') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ $soc_ass->other_infestation_from_family }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __('Soc_as.disease kind') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __($soc_ass->disease_kind) }}" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <x-jet-label for="problem_rating" value="{{ __('soc_as.problem_rating') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ $soc_ass->problem_rating }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __('soc_as.Doctor_view_of_patient') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ $soc_ass->Doctor_view_of_patient }}" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <x-jet-label value="{{ __('soc_as.sociologist_appreciations') }}" />
                    </td>
                    <td>
                        <x-jet-label value="{{ __($soc_ass->sociologist_appreciations) }}" />
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <div class="w-full px-0 overflow-hidden mt-7">
                <x-jet-nav-link href="{{ route('soc_ass.index') }}">
                    <x-jet-secondary-button>
                        {{ __('Back') }}
                    </x-jet-secondary-button>
                </x-jet-nav-link>
            </div>
        </div>
    </div>
</x-app-layout>
