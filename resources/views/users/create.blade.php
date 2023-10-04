<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('app.Users') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-gray-700 ltr:text-left rtl:text-right dark:text-gray-300" id="h3_Title">
                        {{ __('app.create') }} {{ __('app.Users') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="flex border-t flex-wrap items-center">
        <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
            <form action="{{ Route('users.store') }}" method="POST">
                @csrf
                <div class="relative grid grid-cols-6 gap-6 mt-2">

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="name" value="{{ __('user.name') }}" />
                        <x-jet-input type="text" name="name" id="name" :value="old('name')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="name" class="mt-2" />
                    </div>

                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="username" value="{{ __('user.username') }}" />
                        <x-jet-input type="text" name="username" id="username" :value="old('username')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="username" class="mt-2" />
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="email" value="{{ __('user.email') }}" />
                        <x-jet-input type="text" name="email" id="email" :value="old('email')"
                            class="mt-1 block w-full" />
                        <x-jet-input-error for="email" class="mt-2" />
                    </div><br>

                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="password" value="{{ __('user.password') }}" />
                        <x-jet-input type="password" name="password" class="mt-1 block w-full" />
                        <x-jet-input-error for="password" class="mt-2" />
                    </div>

                    <div class="col-span-3 md:col-span-2 lg:col-span-1">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input type="password" name="password_confirmation" class="mt-1 block w-full" />
                        <x-jet-input-error for="password_confirmation" class="mt-2" />
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="role_id" value="{{ __('role.role') }}" />
                        <x-select class="mt-1" name="role_id" :value="old('role_id')">
                            <option value="{{ __(old('role_id')) }}" readonly="true" hidden="true">
                                {{ __(old('role_id')) }}</option>
                            @forelse($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @empty
                            @endforelse
                        </x-select>
                        <x-jet-input-error for="role_id" class="mt-2" />
                    </div>
                </div>
                <div class="w-full px-0 overflow-hidden mt-7">
                    <x-jet-nav-link href="{{ route('users.index') }}">
                        <x-jet-secondary-button>
                            {{ __('Cancel') }}
                        </x-jet-secondary-button>
                    </x-jet-nav-link>
                    <x-jet-button type="submit" class="ltr:ml-3 rtl:mr-3">
                        {{ __('Save') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
