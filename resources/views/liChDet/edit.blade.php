<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('app.Check_Up_Details') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('app.update') }} {{ __('app.Check_Up_Details') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('li_ch_dets.update', $li_ch_dets->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-2">

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="name" value="{{ __('user.name') }}" />
                        <x-jet-input type="text" name="name" id="name" value="{{ __($li_ch_dets->name) }}"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="name" class="mt-2" />
                    </div>
                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="list_checkup_id" value="{{ __('user.Category') }}" />
                        <x-select class="mt-1" name="list_checkup_id">
                            <option value="{{ $li_ch_dets->list_checkup_id }}" readonly="true" hidden="true">
                                {{ $li_ch_dets->list_checkup_id }}</option>
                            @forelse($list_checkups as $list_checkup)
                                <option value="{{ $list_checkup->id }}">{{ $list_checkup->name }}</option>
                            @empty
                            @endforelse
                        </x-select>
                        <x-jet-input-error for="list_checkup_id" class="mt-2" />
                    </div>
                </div>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('li_ch_dets.index') }}">
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
