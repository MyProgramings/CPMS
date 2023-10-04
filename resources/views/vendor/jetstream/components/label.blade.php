@props(['value'])

<label {{ $attributes->merge(['class' => 'font-semibold text-gray-400 ltr:text-left rtl:text-right dark:text-gray-400']) }}>
    {{ $value ?? $slot }}
</label>
