<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
        <form action="{{ Route('restore_s') }}">
            <input type="file" class="form-control w-25 mt-3" name="database_path" id="db_path" />
            <button type="submit" id="submit">submit</button>
        </form>
    </div>
</x-app-layout>
