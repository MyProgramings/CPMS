<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="font-size: 25px;">
    <x-jet-dropdown-menu-manage>
        <x-slot name="header">

            <x-jet-nav-link :active="request()->routeIs('appointments.index', 'list_checkups.index', 'li_ch_dets.index', 'r_checkups.index',
            'r_def_meds.index', 'chemist_preps.index', 'pat_givings.index', 'psy_ass.index', 'soc_ass.index')">
                <i class="fa-solid fa-gear"></i>&nbsp;{{ __('app.Manage_Patient') }}
            </x-jet-nav-link>

        </x-slot>

        <x-slot name="content">
            <!-- Account Management -->
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('app.Manage_Patient') }}
            </div>

            @can('viewAny' , \App\Models\Appointment::class)
            <x-jet-dropdown-link href="{{ route('appointments.index') }}" :active="request()->routeIs('appointments.index')" style="font-size: 16px;">
                <i class="fa-regular fa-calendar-check"></i>&nbsp; {{ __('app.Appoitment') }}
            </x-jet-dropdown-link>
            @endcan
            <div class="border-t border-gray-100"></div>

            @can('viewAny' , \App\Models\List_checkup::class)
            <x-jet-dropdown-link href="{{ route('list_checkups.index') }}" :active="request()->routeIs('list_checkups.index')" style="font-size: 16px;">
                <i class="fa-solid fa-flask-vial">&nbsp;</i> {{ __('app.Check_Up') }}
            </x-jet-dropdown-link>
            @endcan

            <div class="border-t border-gray-100"></div>

            @can('viewAny' , \App\Models\Li_ch_det::class)
            <x-jet-dropdown-link href="{{ route('li_ch_dets.index') }}" :active="request()->routeIs('li_ch_dets.index')" style="font-size: 16px;">
                <i class="fa-solid fa-flask-vial">&nbsp;</i> {{ __('app.Check_Up_Details') }}
            </x-jet-dropdown-link>
            @endcan

            <div class="border-t border-gray-100"></div>
            @php
                $x = 0;
            @endphp
            @can('viewAny' , \App\Models\R_checkup::class)
            @foreach (\App\Models\R_checkup::get() as $r_checkup)
            @if (!($r_checkup->description_res))
                @php
                    $x = 1;
                @endphp
            @endif
            @endforeach
            @if ($x)
            <x-jet-dropdown-link href="{{ route('r_checkups.index') }}" :active="request()->routeIs('r_checkups.index')" style="font-size: 16px;">
                <i class="animate-ping absolute inline-flex fa-solid fa-bell w-2 h-2 text-red-400"></i><i class="fa-solid fa-bell text-red-400 ltr:right-0 rtl:left-0 ltr:ml-1 rtl:mr-1"></i>&nbsp;{{ __('app.R_Check_Up') }}
            </x-jet-dropdown-link>
            @else
            <x-jet-dropdown-link href="{{ route('r_checkups.index') }}" :active="request()->routeIs('r_checkups.index')" style="font-size: 16px;">
                <i class="fa-solid fa-flask-vial">&nbsp;</i> {{ __('app.R_Check_Up') }}
            </x-jet-dropdown-link>
            @endif
            @endcan

            <div class="border-t border-gray-100"></div>

            @can('viewAny' , \App\Models\R_def_med::class)
            <x-jet-dropdown-link href="{{ route('r_def_meds.index') }}" :active="request()->routeIs('r_def_meds.index')" style="font-size: 16px;">
                <i class="fa-solid fa-suitcase-medical"></i>&nbsp; {{ __('app.R_Medicines') }}
            </x-jet-dropdown-link>
            @endcan

            <div class="border-t border-gray-100"></div>

            @can('viewAny' , \App\Models\Pat_giving::class)
            <x-jet-dropdown-link href="{{ route('pat_givings.index') }}" :active="request()->routeIs('pat_givings.index')" style="font-size: 16px;">
                <i class="fa-solid fa-syringe"></i>&nbsp; {{ __('app.patient_Giving') }}
            </x-jet-dropdown-link>
            @endcan

            <div class="border-t border-gray-100"></div>

            @can('viewAny' , \App\Models\Psy_as::class)
            <x-jet-dropdown-link href="{{ route('psy_ass.index') }}" :active="request()->routeIs('psy_ass.index')" style="font-size: 16px;">
                <i class="fa-solid fa-list-check"></i>&nbsp; {{ __('app.psychological_Assess') }}
            </x-jet-dropdown-link>
            @endcan

            <div class="border-t border-gray-100"></div>

            @can('viewAny' , \App\Models\Soc_as::class)
            <x-jet-dropdown-link href="{{ route('soc_ass.index') }}" :active="request()->routeIs('soc_ass.index')" style="font-size: 16px;">
                <i class="fa-regular fa-rectangle-list"></i>&nbsp; {{ __('app.social_Assess') }}
            </x-jet-dropdown-link>
            @endcan

        </x-slot>
    </x-jet-dropdown-menu-manage>

</div>
