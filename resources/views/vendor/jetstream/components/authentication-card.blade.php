<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"
     style="background-image: url('register.png');background-size: 100%">

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white  shadow-xl sm:rounded-lg overflow-hidden">
        <div style="display: flex; justify-content: center">
            {{ $logo }}
        </div><br>
        <span style="display: flex; justify-content: center; font-family: sans-serif; font-size: 40px; color: #4b76c5; line-height: 1.2; text-align: center;width: 100%;
        display: block;
        padding-bottom: 20px;">
            {{ __('Log in') }}
        </span>
        {{ $slot }}
    </div>
</div>
