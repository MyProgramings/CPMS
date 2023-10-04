@props(['disabled' => false])
<select name="file_colors" :value="old('file_colors')"{{ $attributes->wire('model') }} {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => 'form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-600 dark:focus:border-primary-600 disabled:opacity-75 disabled:cursor-no-drop']) }}>
    <option value="{{ __(old('file_colors')) }}" readonly="true">{{ __(old('file_colors')) }}</option>
    <option value="bg-red-500 text-white">{{ __('Red') }}</option>
    <option value="bg-green-500 text-white">{{ __('Green') }}</option>
    <option value="bg-blue-500 text-white">{{ __('Blue') }}</option>
    <option value="bg-yellow-500 text-white">{{ __('Yellow')}}</option>
    <option value="bg-violet-500 text-white">{{ __('Violet') }}</option>
    <option value="bg-orange-500 text-white">{{ __('Orange') }}</option>
    <option value="bg-white text-black">{{ __('White') }}</option>
    <option value="bg-pink-500 text-white">{{ __('Pink') }}</option>
</select>
