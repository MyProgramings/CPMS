<div class="hidden sm:flex">
    <x-dropdown-menu>
        <x-slot name="header">
            <x-nav-link>
                <i class="fa-solid fa-globe"></i>&nbsp;
                {{ LaravelLocalization::getCurrentLocaleNative() }}
            </x-nav-link>
        </x-slot>
        <x-slot name="content">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <x-dropdown-link href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" rel="alternate" hreflang="{{ $localeCode }}">
                {{ $properties['native'] }}
               </x-dropdown-link>
            @endforeach
        </x-slot>
    </x-dropdown-menu>
</div>
