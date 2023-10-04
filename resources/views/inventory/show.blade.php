<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('app.Inventory') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('app.show') }} {{ __('app.Inventory') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="relative grid grid-cols-6 gap-6 mt-2">
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label for="name" value="{{ __($inventory->name) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label for="quantity" value="{{ __($inventory->quantity) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label for="medicine_type" value="{{ __($inventory->medicine_type) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label for="medicines_shape" value="{{ __($inventory->medicines_shape) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label for="complete_date" value="{{ __($inventory->complete_date) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label for="power" value="{{ __($inventory->power) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label for="price" value="{{ __($inventory->price) }}" />
                </div>
                <div class="col-span-1 md:col-span-2">
                    <x-jet-label for="store_keeper_id" value="{{ __($inventory->store_keeper_id) }}" />
                </div>
                <div class="col-span-3 md:col-span-2 lg:col-span-4">
                    <x-jet-label for="notes_inv" value="{{ __($inventory->notes_inv) }}" />
                </div>
            </div>
            <div class="w-full px-0 overflow-hidden mt-7">
                <x-jet-nav-link href="{{ route('inventories.index') }}">
                    <x-jet-secondary-button>
                        {{ __('Back') }}
                    </x-jet-secondary-button>
                </x-jet-nav-link>
            </div>
            </form>
        </div>

    </div>

</x-app-layout>
