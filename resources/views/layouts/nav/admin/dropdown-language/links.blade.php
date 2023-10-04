<div class="hidden sm:flex">
    <x-jet-dropdown-menu>
        <x-slot name="header">
            <x-jet-nav-link>
                <i class="fa-solid fa-globe"></i>&nbsp;
                {{ LaravelLocalization::getCurrentLocaleNative() }}
            </x-jet-nav-link>
        </x-slot>
        <x-slot name="content">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <x-jet-dropdown-link href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" rel="alternate" hreflang="{{ $localeCode }}">
                {{ $properties['native'] }}
               </x-jet-dropdown-link>
            @endforeach
        </x-slot>
    </x-jet-dropdown-menu>
</div>
