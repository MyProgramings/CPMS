<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-cloak x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
    x-bind:class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('CPMS', 'CPMS') }}</title>

    {{-- ---------------- Tailwind CSS ------------------- --}}
    <link href="{{ URL::asset('output.css') }}" rel="stylesheet">
    {{-- ---------------- Google Fonts & Icons ------------------- --}}
    <link href="{{ URL::asset('google_I_F/fonts.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/Almarai/Almarai-Bold.ttf') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/Almarai/Almarai-ExtraBold.ttf') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/Almarai/Almarai-Light.ttf') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/Almarai/Almarai-Regular.ttf') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/Cairo/Cairo-VariableFont_wght.ttf') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/Cairo/Arima') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/Tajawal/Tajawal-Black.ttf') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/Tajawal/Tajawal-Bold.ttf') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/Tajawal/Tajawal-ExtraBold.ttf') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/Tajawal/Tajawal-ExtraLight.ttf') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/Tajawal/Tajawal-Light.ttf') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/Tajawal/Tajawal-Medium.ttf') }}" rel="stylesheet">
    <link href="{{ URL::asset('google_I_F/Tajawal/Tajawal-Regular.ttf') }}" rel="stylesheet">
    <link href="{{ URL::asset('icons/css/all.css') }}" rel="stylesheet">
    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <!-- Styles -->
    @livewireStyles
    <style>
        .loader {
            width: 100%;
            height: 100%;
            position: fixed;
            padding-top: 19%;
            background: rgb(19, 49, 87);
            padding-left: 48%;
            margin: 0 auto;
            z-index: 99999;
        }
        #photo {
            display: none;
        }
        @media print {
            #print_button {
                display: none;
            }

            #action_Button {
                display: none;
            }

            #action_s {
                display: none;
            }

            #photo {
                display: block;
            }
        }

        #search {
            background-image: url({{ URL::asset('searchicon.png') }});
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding-left: 40px;
            padding-right: 40px;
        }

        #h33 {
            font-size: 20px;
            color: #353535
        }

        #reports{
            font-size: 30px;
        }
        #span_Dash {
            font-size: 45px;
            width: 125px;
            color: #ebeef0;
        }

        .font_ar {
            font-family: 'Tajawal', sans-serif;
        }

        .font_en {
            font-family: 'Raleway', sans-serif;
        }

        #icons_s {
            font-size: 35px;
            color: #ebeef0;
        }

        #actions_btn {
            font-size: 25px;
        }

        #h3_Title {
            font-size: 35px;
            /* color: #294658; */
        }

        #h2_Title {
            font-size: 30px;
            /* color: #294658; */
        }
    </style>
</head>

<body class="font-sans antialiased {{ app()->getLocale() === 'ar' ? 'font_ar' : 'font_en' }}"
    dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    <div class="loader">
        <img src="{{ asset('spinning-circles.svg') }}">
    </div>
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100" {{-- style="background:#c5c1e7;
    background: -webkit-linear-gradient(-135deg, #5b21b6, #8b5cf6);
    background: -o-linear-gradient(-135deg, #60a5fa, #1d4ed8);
    background: -moz-linear-gradient(-135deg, #22d3ee, #22d3ee);
    background: linear-gradient(-135deg, #92f3e4, #c3acfa);" --}}>
        @include('layouts.nav.admin.navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-blue-500 shadow-xl shadow-slate-500/50 dark:bg-gray-900 z-0">
                <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8 text-gray-200 ltr:text-left rtl:text-right dark:text-gray-400"
                    id="h2_Title">
                    {{ $header }}
                    {{-- shadow-inner ltr:max-w-8xl rtl:max-w-6xl mx-auto py-4 px-4 sm:px-6 lg:px-8 --}}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            <div class="py-10">
                <div class="pr-0 mx-auto max-w-8xl sm:px-6 lg:px-8">
                    <div
                        class="overflow-hidden text-gray-800 shadow-lg lg:px-0 sm:px-10 bg-blue-100 sm:rounded-lg lg:rounded-3xl dark:bg-gray-900 dark:text-gray-400 ring-1 ring-blue-200">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
    </div>

    @stack('modals')

    @livewireScripts
    <script>
        $(document).on('click', '#submit', function() {
            var test = document.getElementById('db_path');
            console.log(test.files.item(0))
            if (test.files.item(0)) {
                var path = test.files.item(0).name;
                console.log('Exit file', test.files.item(0).name)
                $.ajax({
                    url: "{{ url('restore_s') }}",
                    type: "get",
                    data: {
                        'path': path
                    },
                    success: function() {
                        console.log('ok')
                    },
                    error: function() {
                        console.log('Not ok')
                    }
                })
            } else
                console.log('No Exit file')
        });
        $(document).on('click', '#print_button', function() {
            var to_print = document.getElementById('div_to_print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = to_print;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();

        });
    </script>
    @include('sweetalert::alert')
    <script>
        $(function(){
            setTimeout(() => {
                $('.loader').fadeOut(1000);
            })
        })
      </script>
</body>

</html>
