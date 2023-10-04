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
                        {{ __('app.show') }} {{ __('app.Check_Up_Details') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="relative grid grid-cols-6 gap-6 mt-2">
                <div class="col-span-3 md:col-span-2 lg:col-span-4">
                    <x-jet-label value="{{ __('user.name :___________') }}" />
                    <x-jet-label for="name" value="{{ __($li_ch_det->name) }}" />
                </div>
                <div class="col-span-3 md:col-span-2 lg:col-span-4">
                    <x-jet-label value="{{ __('user.list_checkup_id :___________') }}" />
                    <x-jet-label for="list_checkup_id" value="{{ __($li_ch_det->list_checkup_id) }}" />
                </div>
            </div>
            <div class="w-full px-0 overflow-hidden mt-7">
                <x-jet-nav-link href="{{ route('li_ch_dets.index') }}">
                    <x-jet-secondary-button>
                        {{ __('back') }}
                    </x-jet-secondary-button>
                </x-jet-nav-link>
            </div>
            </form>
        </div>
    </div>
</x-app-layout>
