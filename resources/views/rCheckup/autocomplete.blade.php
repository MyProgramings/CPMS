
<div>

            {{ __('app.show') }} {{ __('user.user') }}


            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">


                <div class="col-span-1 md:col-span-2 lg:col-span-3">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('user.name') }}</div>
                        <div class=" text-sm font-bold z-10">{{ __('mohammed') }}</div>
                    </div>
                </div>


                <div class="col-span-1 md:col-span-2 lg:col-span-2">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('user.username') }}</div>
                        <div class=" text-sm font-bold z-10">{{ __('mohammed') }}</div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2 lg:col-span-3">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('user.email') }}</div>
                        <div class=" text-sm font-bold z-10">{{ __('mohammed') }}</div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2 lg:col-span-2">
                    <div class="relative  p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('user.role') }}</div>
                        <div class="flex w-full ">
                            <div class="px-2 py-1 z-10 text-xs mx-auto font-semibold leading-tight rounded-full drop-shadow-md {{ __('role.color') }}">
                                {{ __('mohammed') }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2 lg:col-span-3">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('user.country') }}</div>
                        <div class=" text-sm font-bold z-10">{{ __('mohammed') }}</div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2 lg:col-span-2">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('user.city') }}</div>
                        <div class=" text-sm font-bold z-10">{{ __('mohammed') }}</div>
                    </div>
                </div>

                <div class="col-span-1 md:col-span-2 lg:col-span-3">
                    <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                        <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('app.created_at') }}</div>
                        <div class=" text-sm font-bold z-10">{{ __('mohammed') }}</div>
                    </div>
                </div>

                    <div class="col-span-1 md:col-span-2 lg:col-span-3">
                        <div class="relative p-3 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg md:rounded-lg sm:rounded-sm">
                            <div class="absolute -top-4 right-3 px-3 pt-1 text-xs font-semibold bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded-t-lg">{{ __('app.updated_at') }}</div>
                            <div class=" text-sm font-bold z-10">{{ __('mohammed') }}</div>
                        </div>
                    </div>

            </div>

            <x-jet-secondary-button>
                {{ __('Cancel') }}
            </x-jet-secondary-button>



</div>
