<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت نام</title>
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: 'Vazir', sans-serif;
            direction: rtl;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            width: 90%;
            max-width: 600px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }
        .register-container h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
            text-align: center;
        }
        .register-container .form-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .register-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        .register-container .required::after {
            content: " *";
            color: red;
        }
        .register-container input[type="text"],
        .register-container input[type="password"],
        .register-container input[type="email"] {
            width: 99%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s;
            font-size: 16px;
        }
        .register-container input[type="text"]:focus,
        .register-container input[type="password"]:focus,
        .register-container input[type="email"]:focus {
            border-color: #0210d6;
            outline: none;
        }
        .register-container .section-title {
            background-color: #0003c5;
            padding: 7px 12px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 15px;
            font-size: 16px;
            color: white;
            width: 100%;
        }
        .register-container button {
            width: 100%;
            padding: 15px;
            background-color: #00a79d;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }
        .register-container button:hover {
            background-color: #008b7d;
        }
    </style>
</head>
<body>

    <div class="register-container">


        <h2>ثبت نام</h2>
        <form  method="POST" action="{{ route('register') }}">
            @csrf
            <div class="section-title">اطلاعات شخصی</div>
            <div class="form-group">
                <div>
                    <label for="first-name" class="required">نام</label>
                    <input type="text" id="first-name" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                    <label for="last-name" class="required">نام خانوادگی</label>
                    <input type="text" id="last-name" name="family" :value="old('family')" required autofocus autocomplete="family" />
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
                    <input type="text" id="phone" name="mobile"   :value="old('mobile')" placeholder="091xxxxxxxx" required autofocus
                    autocomplete="mobile">
                <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                </div>
            </div>

            <div class="section-title">اطلاعات امنیتی</div>
            <div class="form-group">
                <div>
                    <label for="password" class="required">گذرواژه</label>
                    <input type="password" id="password" name="password"
                    required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div>
                    <label for="confirm-password" class="required">تکرار گذرواژه</label>
                    <input type="password" id="confirm-password" name="password_confirmation" required autocomplete="new-password" />
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
</body>
</html>
