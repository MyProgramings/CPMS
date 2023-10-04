<div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-jet-nav-link>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('patients') }}" :active="request()->routeIs('patients')">
        {{ __('Patients') }}
    </x-jet-nav-link>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('appointments.index') }}" :active="request()->routeIs('appointments.index')">
        {{ __('Appoitment') }}
    </x-jet-nav-link>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('list_checkups.index') }}" :active="request()->routeIs('list_checkups.index')">
        {{ __('Check Up') }}
    </x-jet-nav-link>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('li_ch_dets.index') }}" :active="request()->routeIs('li_ch_dets.index')">
        {{ __('Medicines') }}
    </x-jet-nav-link>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('chemist_preps.index') }}" :active="request()->routeIs('chemist_preps.index')">
        {{ __('Prepare') }}
    </x-jet-nav-link>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('pat_givings.index') }}" :active="request()->routeIs('pat_givings.index')">
        {{ __('Giving') }}
    </x-jet-nav-link>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('psy_as.index') }}" :active="request()->routeIs('psy_as.index')">
        {{ __('psychological') }}
    </x-jet-nav-link>
</div>
<div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('soc_as.index') }}" :active="request()->routeIs('soc_as.index')">
        {{ __('social') }}
    </x-jet-nav-link>
</div>
@can('create' , \App\Models\Inventory::class)
<div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('inventories.index') }}" :active="request()->routeIs('inventories.index')">
        {{ __('Inventory') }}
    </x-jet-nav-link>
</div>
@endcan
<div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
        {{ __('Users') }}
    </x-jet-nav-link>
</div>

