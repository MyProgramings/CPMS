@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center bg-gray-700 px-3 pt-1 border-b-4 border-blue-300 text-sm font-medium leading-5 text-blue-200 focus:outline-none focus:border-primary-700 transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-200 dark:text-gray-100 dark:hover:text-gray-100 hover:text-white hover:border-b-4 hover:border-gray-300 hover:bg-slate-700 dark:hover:border-gray-50 focus:outline-none focus:text-white dark:focus:text-gray-100 focus:border-gray-300 dark:focus:border-gray-600 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} style="font-size: 19px;">
    {{ $slot }}
</a>
