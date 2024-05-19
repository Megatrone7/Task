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
                <img
                    src="https://images.unsplash.com/photo-1655890938539-7257cdd5ea34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" />
            </div>

            <div class="login__form__right">
              
                <!-- اختصاص شناسه به فرم -->
                <form method="POST" action="{{ route('confirm_otp_code') }}">
                    @csrf
                    <label for="input-email">کد یکبار مصرف</label>
                    <input type="text" id="input-email" name="code" :value="old('code')" required autofocus
                        autocomplete="code" />
                    <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                    @if (session('msg'))
                        <div class="alert">{{ session('msg') }}</div>
                    @endif

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
                    <button type="submit" class="login-btn">ورود</button>
                </form>
                <form id="hiddenForm" action="{{ route('recode') }}" method="POST">
                    @csrf
                    <input type="hidden" name="mobile" value="{{ Session::get('mobile') }}">

                    <button id="resendButton" type="submit" disabled>ارسال مجدد اس ام اس</button>
                    <div class="flex justify-center items-center  bg-green-100 p-3 shadow  rounded-lg">
                        <p id="countdown">120</p>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        var routeUrl = "{{ route('recode') }}";
        document.addEventListener('DOMContentLoaded', function() {
            var resendButton = document.getElementById('resendButton');
            var countdownElement = document.getElementById('countdown');
            var countdown = 120;
            var interval;

            function startCountdown() {
                countdown = 120;
                countdownElement.textContent = countdown;
                resendButton.disabled = true;

                interval = setInterval(function() {
                    countdown--;
                    countdownElement.textContent = countdown;
                    if (countdown === 0) {
                        clearInterval(interval);
                        resendButton.disabled = false;
                    }
                }, 1000);
            }


            resendButton.addEventListener('click', function() {
                if (countdown === 0) {
                    hiddenForm.submit();
                } else {
                    startCountdown();
                }
            });
            startCountdown();
        });
    </script>
</body>

</html>
