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

                        <h1 class=" font-bold text-2xl mb-2">ثبت نام</h1>
                    </div>

                    <form method="POST" class=" max-h-[400px] px-3 overflow-y-auto " action="{{ route('register') }}">
                        @csrf
                        <div class="section-title">اطلاعات شخصی</div>
                        <div class="form-group">
                            <div>
                                <label for="first-name" class="required">نام</label>
                                <input type="text" id="first-name" name="name" :value="old('name')" required
                                    autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div>
                                <label for="last-name" class="required">نام خانوادگی</label>
                                <input type="text" id="last-name" name="family" :value="old('family')" required
                                    autofocus autocomplete="family" />
                                <x-input-error :messages="$errors->get('family')" class="mt-2" />
                            </div>
                        </div>

                        <div class="section-title">اطلاعات تماس</div>
                        <div class="form-group">
                            <div>
                                <label for="email" class="required">ایمیل</label>
                                <input type="email" id="email" name="email" required autofocus
                                    autocomplete="email">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div>
                                <label for="phone" class="required">شماره همراه</label>
                                <input type="text" id="phone" name="mobile" :value="old('mobile')"
                                    placeholder="091xxxxxxxx" required autofocus autocomplete="mobile">
                                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                            </div>
                        </div>

                        <div class="section-title">اطلاعات امنیتی</div>
                        <div class="form-group">
                            <div>
                                <label for="password" class="required">گذرواژه</label>
                                <input type="password" id="password" name="password" required
                                    autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div>
                                <label for="confirm-password" class="required">تکرار گذرواژه</label>
                                <input type="password" id="confirm-password" name="password_confirmation" required
                                    autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>

                        <div class="section-title">معرف</div>
                        <?php $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING); ?>
                        <div class="form-group">
                            <div style="width: 100%;">
                                <label for="referral-code">کد معرف</label>
                                <input type="text" id="referral-code" name="inv" :value="old('invite_code')"
                                    value="{{ @$_GET['referrer'] != null && @$_GET['referrer'] != '' ? @$_GET['referrer'] : '' }}"
                                    autofocus autocomplete="invite_code" />
                                <x-input-error :messages="$errors->get('invite_code')" class="mt-2" />
                            </div>
                        </div>

                        <button type="submit">ثبت نام</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>
