<div class="pt-2 pb-3 space-y-1">
    <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        <i class="fa-solid fa-gauge"></i>&nbsp; {{ __('Dashboard') }}
    </x-jet-responsive-nav-link>
</div>
@can('viewAny', \App\Models\Patient::class)
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('patients.index') }}" :active="request()->routeIs('patients.index')">
            <i class="fa-solid fa-hospital-user"></i>&nbsp; {{ __('app.Patients') }}
        </x-jet-responsive-nav-link>
    </div>
@endcan
@can('viewAny', \App\Models\Inventory::class)
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('inventories.index') }}" :active="request()->routeIs('inventories.index')">
            <i class="fa-solid fa-laptop-medical"></i>&nbsp; {{ __('app.Inventory') }}
        </x-jet-responsive-nav-link>
    </div>
@endcan
@can('viewAny', \App\Models\User::class)
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
            <i class="fa-regular fa-user">&nbsp; </i> {{ __('app.Users') }}
        </x-jet-responsive-nav-link>
    </div>
@endcan
@can('viewAny', \App\Models\Appointment::class)
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('appointments.index') }}" :active="request()->routeIs('appointments.index')">
            <i class="fa-solid fa-calendar-check"></i>&nbsp; {{ __('app.Appoitment') }}
        </x-jet-responsive-nav-link>
    </div>
@endcan
@can('viewAny', \App\Models\List_checkup::class)
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('list_checkups.index') }}" :active="request()->routeIs('list_checkups.index')">
            <i class="fa-solid fa-vials">&nbsp;</i> {{ __('app.Check_Up') }}
        </x-jet-responsive-nav-link>
    </div>
@endcan
@can('viewAny', \App\Models\Li_ch_det::class)
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('li_ch_dets.index') }}" :active="request()->routeIs('li_ch_dets.index')">
            <i class="fa-solid fa-vials">&nbsp;</i> {{ __('app.Check_Up_Details') }}
        </x-jet-responsive-nav-link>
    </div>
@endcan
@can('viewAny', \App\Models\R_checkup::class)
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('r_checkups.index') }}" :active="request()->routeIs('r_checkups.index')">
            <i class="fa-solid fa-vials">&nbsp;</i> {{ __('app.R_Check_Up') }}
        </x-jet-responsive-nav-link>
    </div>
@endcan
@can('viewAny', \App\Models\R_def_med::class)
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('r_def_meds.index') }}" :active="request()->routeIs('r_def_meds.index')">
            <i class="fa-solid fa-suitcase-medical"></i>&nbsp; {{ __('app.R_Medicines') }}
        </x-jet-responsive-nav-link>
    </div>
@endcan
@can('viewAny', \App\Models\Pat_giving::class)
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('pat_givings.index') }}" :active="request()->routeIs('pat_givings.index')">
            <i class="fa-solid fa-hospital-user"></i>&nbsp; {{ __('app.patient_Giving') }}
        </x-jet-responsive-nav-link>
    </div>
@endcan
@can('viewAny', \App\Models\Psy_as::class)
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('psy_ass.index') }}" :active="request()->routeIs('psy_ass.index')">
            <i class="fa-solid fa-hospital-user"></i>&nbsp; {{ __('app.psychological_Assess') }}
        </x-jet-responsive-nav-link>
    </div>
@endcan
@can('viewAny', \App\Models\Soc_as::class)
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('soc_ass.index') }}" :active="request()->routeIs('soc_ass.index')">
            <i class="fa-solid fa-hospital-user"></i>&nbsp; {{ __('app.social_Assess') }}
        </x-jet-responsive-nav-link>
    </div>
@endcan
@if (Auth::user()->role_id == 1)
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('backup') }}">
            <i class="fa-solid fa-database"></i>&nbsp; {{ __('app.Add_backup') }}
        </x-jet-responsive-nav-link>
    </div>
    <div class="pt-2 pb-3 space-y-1">
        <x-jet-responsive-nav-link href="{{ route('create_restore') }}">
            <i class="fa-solid fa-server"></i>&nbsp; {{ __('app.Restore_backup') }}
        </x-jet-responsive-nav-link>
    </div>
@endif
<div class="pt-2 pb-3 space-y-1">
    <x-jet-responsive-nav-link id="switch_s" href="{{ route('translate_to_ar') }}">
        {{-- href="{{ url(app()->getLocale() == 'ar'? 'en':'ar' ) }}"> --}}
        {{-- {{ app()->getLocale() == 'ar'? 'English':'عربي' }} --}}
        <i class="fa-solid fa-globe"></i>&nbsp; {{ 'عربي' }}
    </x-jet-responsive-nav-link>
</div>
<div class="pt-2 pb-3 space-y-1">
    <x-jet-responsive-nav-link id="switch_s" href="{{ route('translate_to_en') }}">
        {{-- href="{{ url(app()->getLocale() == 'ar'? 'en':'ar' ) }}"> --}}
        {{-- {{ app()->getLocale() == 'ar'? 'English':'عربي' }} --}}
        <i class="fa-solid fa-globe"></i>&nbsp; {{ 'English' }}
    </x-jet-responsive-nav-link>
</div>
