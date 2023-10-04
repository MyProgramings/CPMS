<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
                <div class="bg-blue-100 dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
                    <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
                        <h1 id="reports">{{ __('Today') }} {{ __('app.Reports') }}</h1>
                        <div class="relative grid grid-cols-6 gap-6 mt-2">
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #86f1f0, #9cd9f8);">
                                @can('viewAny', \App\Models\Patient::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('patient_s.patients') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #3b9bcc, #00959f);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight" id="span_Dash">
                                            {{ number_format(\App\Models\Patient::whereDate('created_at', '=', today())->count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-hospital-user"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #86f1f0, #9cd9f8);">
                                <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                    @can('viewAny', \App\Models\Appointment::class)
                                        {{ __('app.Appoitment') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #3b9bcc, #00959f);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight" id="span_Dash">
                                            {{ number_format(\App\Models\Appointment::whereDate('created_at', '=', today())->count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-calendar-check"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #86f1f0, #9cd9f8);">
                                @can('viewAny', \App\Models\Inventoris::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.Inventory') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #3b9bcc, #00959f);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight" id="span_Dash">
                                            {{ number_format(\App\Models\Inventoris::whereDate('created_at', '=', today())->count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-laptop-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #86f1f0, #9cd9f8);">
                                @can('viewAny', \App\Models\R_def_med::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.R_Medicines') }}</h3>
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #3b9bcc, #00959f);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight" id="span_Dash">
                                            {{ number_format(\App\Models\R_def_med::whereDate('created_at', '=', today())->count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-suitcase-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #86f1f0, #9cd9f8);">
                                @can('viewAny', \App\Models\R_checkup::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.R_Check_Up') }}</h3>
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #3b9bcc, #00959f);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight" id="span_Dash">
                                            {{ number_format(\App\Models\R_checkup::whereDate('created_at', '=', today())->count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-vials"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #86f1f0, #9cd9f8);">
                                @can('viewAny', \App\Models\Pat_giving::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.patient_Giving') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #3b9bcc, #00959f);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight" id="span_Dash">
                                            {{ number_format(\App\Models\Pat_giving::whereDate('created_at', '=', today())->count(), 0) }}&nbsp;<i
                                                id="icons_s" class="fa-solid fa-syringe"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
                        <h1 id="reports">{{ __('Month') }} {{ __('app.Reports') }}</h1>
                        <div class="relative grid grid-cols-6 gap-6 mt-2">
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #c0e79e, #d0f7ad);">
                                @can('viewAny', \App\Models\Patient::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('patient_s.patients') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #93d159, #6da538);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight" id="span_Dash">
                                            {{ number_format(\App\Models\Patient::whereMonth('created_at', '=', now()->month)->whereYear('created_at', '=', now()->year)->count(),0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-hospital-user"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #c0e79e, #d0f7ad);">
                                @can('viewAny', \App\Models\Appointment::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.Appoitment') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #93d159, #6da538);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight" id="span_Dash">
                                            {{ number_format(\App\Models\Appointment::whereMonth('created_at', '=', now()->month)->whereYear('created_at', '=', now()->year)->count(),0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-calendar-check"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #c0e79e, #d0f7ad);">
                                @can('viewAny', \App\Models\Inventoris::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.Inventory') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #93d159, #6da538);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight" id="span_Dash">
                                            {{ number_format(\App\Models\Inventoris::whereMonth('created_at', '=', now()->month)->whereYear('created_at', '=', now()->year)->count(),0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-laptop-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #c0e79e, #d0f7ad);">
                                @can('viewAny', \App\Models\R_def_med::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.R_Medicines') }}</h3>
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #93d159, #6da538);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\R_def_med::whereMonth('created_at', '=', now()->month)->whereYear('created_at', '=', now()->year)->count(),0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-suitcase-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #c0e79e, #d0f7ad);">
                                @can('viewAny', \App\Models\R_checkup::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.R_Check_Up') }}</h3>
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #93d159, #6da538);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\R_checkup::whereMonth('created_at', '=', now()->month)->whereYear('created_at', '=', now()->year)->count(),0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-vials"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #c0e79e, #d0f7ad);">
                                @can('viewAny', \App\Models\Pat_giving::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.patient_Giving') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #93d159, #6da538);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Pat_giving::whereMonth('created_at', '=', now()->month)->whereYear('created_at', '=', now()->year)->count(),0) }}&nbsp;<i
                                                id="icons_s" class="fa-solid fa-syringe"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
                        <h1 id="reports">{{ __('Year') }} {{ __('app.Reports') }}</h1>
                        <div class="relative grid grid-cols-6 gap-6 mt-2">
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #f8a5a5, #db7575);">
                                @can('viewAny', \App\Models\Patient::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('patient_s.patients') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #df5757, #ad3636);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Patient::whereYear('created_at', '=', now()->year)->count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-hospital-user"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #f8a5a5, #db7575);">
                                @can('viewAny', \App\Models\Appointment::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.Appoitment') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #df5757, #ad3636);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Appointment::whereYear('created_at', '=', now()->year)->count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-calendar-check"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #f8a5a5, #db7575);">
                                @can('viewAny', \App\Models\Inventoris::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.Inventory') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #df5757, #ad3636);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Inventoris::whereYear('created_at', '=', now()->year)->count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-laptop-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #f8a5a5, #db7575);">
                                @can('viewAny', \App\Models\R_def_med::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.R_Medicines') }}</h3>
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #df5757, #ad3636);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\R_def_med::whereYear('created_at', '=', now()->year)->count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-suitcase-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #f8a5a5, #db7575);">
                                @can('viewAny', \App\Models\R_checkup::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.R_Check_Up') }}</h3>
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #df5757, #ad3636);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\R_checkup::whereYear('created_at', '=', now()->year)->count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-vials"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #f8a5a5, #db7575);">
                                @can('viewAny', \App\Models\Pat_giving::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.patient_Giving') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                        style="background: linear-gradient(-135deg, #df5757, #ad3636);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Pat_giving::whereYear('created_at', '=', now()->year)->count(), 0) }}&nbsp;<i
                                                id="icons_s" class="fa-solid fa-syringe"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
                        <h1 id="reports">{{ __('app.All') }} {{ __('app.Reports') }}</h1>
                        <div class="relative grid grid-cols-6 gap-6 mt-2">
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                                @can('viewAny', \App\Models\R_checkup::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.R_Check_Up') }}</h3>
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                    style="background: linear-gradient(-135deg, #4169b3, #6a9af3);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\R_checkup::count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-vials"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                                @can('viewAny', \App\Models\Inventoris::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.Inventory') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                    style="background: linear-gradient(-135deg, #4169b3, #6a9af3);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Inventoris::count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-laptop-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                                @can('viewAny', \App\Models\R_def_med::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.R_Medicines') }}</h3>
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                    style="background: linear-gradient(-135deg, #4169b3, #6a9af3);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\R_def_med::count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-suitcase-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                                @can('viewAny', \App\Models\User::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.Users') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                    style="background: linear-gradient(-135deg, #4169b3, #6a9af3);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\User::count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-regular fa-user"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                                @can('viewAny', \App\Models\Patient::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('patient_s.patients') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                    style="background: linear-gradient(-135deg, #4169b3, #6a9af3);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Patient::count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-hospital-user"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                                @can('viewAny', \App\Models\Appointment::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.Appoitment') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                    style="background: linear-gradient(-135deg, #4169b3, #6a9af3);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Appointment::count(), 0) }}&nbsp;<i
                                                id="icons_s"class="fa-solid fa-calendar-check"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
                        <div class="relative grid grid-cols-6 gap-6 mt-2">
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                                @can('viewAny', \App\Models\Li_ch_det::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.Check_Up_Details') }}</h3>
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                    style="background: linear-gradient(-135deg, #4169b3, #6a9af3);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Li_ch_det::count(), 0) }}&nbsp;<i
                                            id="icons_s"class="fa-solid fa-laptop-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                                @can('viewAny', \App\Models\Permission::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.Permission') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                    style="background: linear-gradient(-135deg, #4169b3, #6a9af3);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Permission::count(), 0) }}&nbsp;<i
                                            id="icons_s"class="fa-solid fa-laptop-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                                @can('viewAny', \App\Models\Role::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.role') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                    style="background: linear-gradient(-135deg, #4169b3, #6a9af3);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Role::count(), 0) }}&nbsp;<i
                                            id="icons_s"class="fa-solid fa-laptop-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                                @can('viewAny', \App\Models\List_checkup::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.Check_Up') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                    style="background: linear-gradient(-135deg, #4169b3, #6a9af3);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\List_checkup::count(), 0) }}&nbsp;<i
                                            id="icons_s"class="fa-solid fa-laptop-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                                @can('viewAny', \App\Models\Pat_giving::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.patient_Giving') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                    style="background: linear-gradient(-135deg, #4169b3, #6a9af3);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Pat_giving::count(), 0) }}&nbsp;<i
                                            id="icons_s"class="fa-solid fa-laptop-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                                @can('viewAny', \App\Models\Psy_as::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.psychological_Assess') }}</h3>
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                    style="background: linear-gradient(-135deg, #4169b3, #6a9af3);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Psy_as::count(), 0) }}&nbsp;<i
                                            id="icons_s"class="fa-solid fa-laptop-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="relative flex-row flex-1 w-full max-w-full px-4 py-4">
                        <div class="relative grid grid-cols-6 gap-6 mt-2">
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                                @can('viewAny', \App\Models\Soc_as::class)
                                    <h3 class="text-gray-900 text-base font-medium tracking-tight" id="h33">
                                        {{ __('app.social_Assess') }}</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="h-20 inline-flex items-center justify-center p-2 rounded-md shadow-lg"
                                    style="background: linear-gradient(-135deg, #4169b3, #6a9af3);">
                                        <h1 class="w-20 text-gray-900 text-base font-medium tracking-tight"
                                            id="span_Dash">
                                            {{ number_format(\App\Models\Soc_as::count(), 0) }}&nbsp;<i
                                            id="icons_s"class="fa-solid fa-laptop-medical"></i>
                                        </h1>
                                    </span>
                                @endcan
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                            style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                            </div>
                            <div class="col-span-3 rounded-lg shadow-lg md:col-span-2 lg:col-span-1 p-5"
                                style="background: linear-gradient(-135deg, #aecafd, #708cc0);">
                            </div>
                        </div>
                    </div>
                </div>
</x-app-layout>
