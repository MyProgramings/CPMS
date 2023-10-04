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
                        {{ __('Update') }} {{ __('app.Inventory') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('inventories.update', $inventorys->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-2">
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="store_keeper" value="{{ __('inventorys_s.store_keeper') }}" />
                        <x-jet-input type="text" readonly="true" name="store_keeper" id="store_keeper"
                            value="{{ $inventorys->store_keeper }}" class="mt-1 block w-full" />
                    </div>
                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="name" value="{{ __('inventorys_s.name') }}" />
                        <x-jet-input type="text" name="name" id="name" value="{{ __($inventorys->name) }}"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="name" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="quantity" value="{{ __('inventorys_s.quantity') }}" />
                        <x-jet-input type="number" name="quantity" id="quantity"
                            value="{{ __($inventorys->quantity) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="quantity" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="medicine_type" value="{{ __('inventorys_s.medicine_type') }}" />
                        <x-select class="mt-1" name="medicine_type" value="">
                            <option value="{{ $inventorys->medicine_type }}" readonly="true" hidden="true">
                                {{ $inventorys->medicine_type }}</option>
                            <option value="supplementary">{{ __('Supplementary') }}</option>
                            <option value="chemist">{{ __('Chemist') }}</option>
                        </x-select>
                        <x-jet-input-error for="medicine_type" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="medicines_shape" value="{{ __('inventorys_s.medicines_shape') }}" />
                        <x-jet-input type="text" name="medicines_shape" id="medicines_shape"
                            value="{{ __($inventorys->medicines_shape) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="medicines_shape" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="complete_date" value="{{ __('inventorys_s.complete_date') }}" />
                        <x-jet-input type="date" name="complete_date" id="complete_date"
                            value="{{ __($inventorys->complete_date) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="complete_date" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="power" value="{{ __('inventorys_s.power') }}" />
                        <x-jet-input type="text" name="power" id="power"
                            value="{{ __($inventorys->power) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="power" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="price" value="{{ __('inventorys_s.price') }}" />
                        <x-jet-input type="number" name="price" id="price"
                            value="{{ __($inventorys->price) }}" class="mt-1 block w-full" />
                        <x-jet-input-error for="price" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-4">
                        <x-jet-label for="notes_inv" value="{{ __('inventorys_s.notes_inv') }}" />
                        <x-jet-input type="text" name="notes_inv" id="notes_inv"
                            value="{{ __($inventorys->notes_inv) }}" class="mt-1 block w-full" />
                    </div>
                </div>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('inventories.index') }}">
                        <x-jet-secondary-button>
                            {{ __('Cancel') }}
                        </x-jet-secondary-button>
                    </x-jet-nav-link>
                    <x-jet-button type="submit" onclick="return confirm('Are you shur to Edit')"
                        class="ltr:ml-3 rtl:mr-3">
                        {{ __('Save') }}
                    </x-jet-button>

                </div>
            </form>
        </div>
    </div>

</x-app-layout>
