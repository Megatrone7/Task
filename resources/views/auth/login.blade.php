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
    <div class="container ">
        <div class="      flex   items-center justify-center  ">
            <div class="login__form">
                <div class="login__form__img">
                    <img src="{{ asset('loginimage.avif') }}" alt="" />
                </div>
                <div class="login__form__right">
                    <div class="flex justify-center items-center ">

                        <h1 class=" font-bold text-2xl mb-2">ورود</h1>
                    </div>
                    <form method="POST" dir="rtl" class="flex flex-col " action="{{ route('login') }}">
                        @csrf
                        <div class="w-full">
                            <label for="input-email">شماره تلفن</label>
                            <input type="text" id="input-email" name="mobile" :value="old('mobile')" required
                                autofocus autocomplete="mobile" />
                        </div>
                        <div class="w-full">

                            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                        </div>
                        <div class="w-full">

                            <label for="input-pass">رمز ورود </label>
                            <input type="password" id="input-pass" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <div class="w-full">

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        @if (session('msg'))
                            <div class="alert">{{ session('msg') }}</div>
                        @endif
                        <button class="login-btn">ورود</button>
                    </form>
                    <div class="flex flex-col gap-y-3">
                        <a class="rounded-lg p-2 bg-sky-300 text-center hover:bg-sky-500 text-white block w-full shadow text-xs"
                            href="/sms">ورود
                            با
                            کد یکبار مصرف</a></span>

                        <div class="additional-buttons flex flex-col gap-y-3">

                            <div class="bottom">
                                @if (Route::has('password.request'))
                                    <a class="rounded-lg p-2 text-center bg-rose-300 hover:bg-rose-500 text-white shadow block w-full text-xs"
                                        href="{{ route('password.request') }}">رمز عبور
                                        را فراموش کرده اید؟</a>
                                @endif
                            </div>

                            <div class="bottom">
                                <span>حساب کاربری ندارید؟ <a class=" text-blue-500 hover:text-blue-200"
                                        href="{{ route('register') }}">ثبت نام</a></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
