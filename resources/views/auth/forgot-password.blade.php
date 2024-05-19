{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="fa" direction="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ session('variable1') }}</title>
    <link rel="stylesheet" href="style1.css" />
    @vite('resources/css/app.css')

</head>
<body>
    <div class="container">
        <div class="login__form">
            <div class="login__form__img">
                <img src="https://images.unsplash.com/photo-1655890938539-7257cdd5ea34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" />
            </div>
            <div class="login__form__right">
                <h1>ورود</h1>

                <form  method="POST" action="{{ route('changepass') }}">
                    @csrf
                    <label for="input-email">شماره تلفن</label>
                    <input type="text" id="input-email" name="mobile" :value="old('mobile')" required autofocus autocomplete="mobile" />
                    <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                        <input type="hidden" name="forget" value="1"/>

                    <button type="submit" class="login-btn">ورود</button>
                </form>

                <div class="flex flex-col gap-y-3">


                    <div class="additional-buttons flex flex-col gap-y-3">



                        <div class="bottom">
                            <span>حساب کاربری ندارید؟ <a class=" text-blue-500 hover:text-blue-200"
                                    href="{{ route('register') }}">ثبت نام</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</body>
</html>

