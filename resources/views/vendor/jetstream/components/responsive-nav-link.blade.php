@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block ltr:pl-3 rtl:pr-3 ltr:pr-4 rtl:pl-4 py-2 ltr:border-l-4 rtl:border-r-4 border-primary-400 dark:border-primary-400 text-base font-medium text-primary-700 dark:text-primary-700 bg-primary-50 dark:bg-primary-50 focus:outline-none focus:text-primary-800 focus:bg-primary-100 focus:border-primary-700 transition'
            : 'block ltr:pl-3 rtl:pr-3 ltr:pr-4 rtl:pl-4 py-2 ltr:border-l-4 rtl:border-r-4 border-transparent text-base font-medium text-white dark:text-white hover:text-gray-800 dark:hover:text-gray-800 hover:bg-gray-50 dark:hover:bg-gray-50 hover:border-gray-300 dark:hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
