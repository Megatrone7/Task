<!DOCTYPE html>
<html lang="fa" direction="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Almas</title>
    <link rel="stylesheet" href="style1.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="login__form">
            <div class="login__form__img">
                <img src="https://images.unsplash.com/photo-1655890938539-7257cdd5ea34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" />
            </div>

            <div class="login__form__right">
                <h1>ورود</h1>
                <!-- اختصاص شناسه به فرم -->
                <form  method="POST" action="{{ route('confirm_otp_code') }}">
                    @csrf
                    <label for="input-email">کد یکبار مصرف</label>
                    <input type="text" id="input-email" name="code" :value="old('code')" required autofocus autocomplete="code" />
                    <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                        @if (session('msg'))
                        <div class="alert">{{ session('msg') }}</div>
                    @endif
                    <button type="submit" class="login-btn">ورود</button>
                </form>
                <form id="hiddenForm" action="{{ route('recode') }}" method="POST" >
                    @csrf
                    <input type="hidden" name="mobile" value="{{ Session::get('mobile') }}">

                    <button id="resendButton" type="submit" disabled>ارسال مجدد اس ام اس</button>
                    <p id="countdown">120</p>

                </form>

                <div class="additional-buttons">
                    <div class="bottom">
                        @if (Route::has('password.request'))
                            <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a  href="{{ route('password.request') }}">رمز عبور را فراموش کرده اید؟</a></span>
                        @endif
                    </div>
                    <div class="bottom">
                        <span>حساب کاربری ندارید؟ <a href="{{ route('register') }}">ثبت نام</a></span>
                    </div>
                </div>
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
