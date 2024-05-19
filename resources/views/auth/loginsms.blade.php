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
                <!-- اختصاص شناسه به فرم -->
                <form  method="POST" action="{{ route('confirm.code') }}">
                    @csrf
                    <label for="input-email">شماره تلفن</label>
                    <input type="text" id="input-email" name="mobile" :value="old('mobile')" required autofocus autocomplete="mobile" />
                    <x-input-error :messages="$errors->get('mobile')" class="mt-2" />

                    <button type="submit" class="login-btn">ورود</button>
                </form>

                <div class="flex flex-col gap-y-3">


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


</body>
</html>
