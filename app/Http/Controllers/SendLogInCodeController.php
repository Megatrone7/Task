<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Code;
use App\Models\User;
//use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class SendLogInCodeController extends Controller
{

    public function index(Request $request)
{
    // ورودی شماره همراه را بررسی و اعتبارسنجی می‌کنیم
    $request->validate([
        'mobile' => ['required', 'regex:/[0]{1}[0-9]{10}/'],
    ]);

    // شماره همراه را دریافت می‌کنیم. اگر در فرم ارسال نشده باشد، از سشن می‌گیریم
    $phone = $request->mobile ?: session('mobile');

    // آخرین سابقه ارسال کد را برای این شماره همراه پیدا می‌کنیم
    $recentOrder = Code::where('mobile', $phone)
        ->orderBy('created_at', 'DESC')
        ->first();

    // اگر در کمتر از 2 دقیقه قبل کد ارسال شده باشد، دیگر نیازی به ارسال مجدد نیست
    if ($recentOrder && time() - strtotime($recentOrder->created_at) < 120) {
        // کاربر را به صفحه قبلی با پیام "منتظر بمانید" بازمی‌گردانیم
        return redirect()->back()->with('msg', 'منتظر بمانید');
    }

    // در غیر این صورت، یک کد جدید ایجاد و به کاربر ارسال می‌کنیم
    $code = rand(1000, 9999);
    $this->kavehnegar($phone, $code);

    // کد جدید را در پایگاه داده ذخیره می‌کنیم
    $order = Code::create([
        'code' => $code,
        'mobile' => $phone
    ]);
    if (session()->has('mobile')) {
        session()->forget('mobile');
        session()->forget('code');
    }
    // کد جدید را در سشن ذخیره می‌کنیم
    session(['code' => $order->code]);
    session(['mobile' => $phone]);

    // کاربر را به مسیر 'getcode' هدایت می‌کنیم
    return redirect()->route('getcode');
}


    public function kavehnegar($phone, $code)
    {
        $url2 = 'https://api.kavenegar.com/v1/546636523633332F52416E33337768557474466D383236776F556C2F6A6A4832576C6A4D4F395479756A6F3D/sms/send.json?receptor=' . $phone . '&sender='. env('SMS_SENDER_NUMBER') .' &message='.$code.'';
        $response = Http::get($url2);
        $data = $response->json();
    }


    public function otp_code_confirm(Request $request)
{
    // دریافت کد وارد شده توسط کاربر
    $enteredCode = $request->code;

    // دریافت شماره همراه از سشن
    $mobileNumber = session('mobile');

    // دریافت کد مربوط به این شماره همراه از سشن
    $sessionCode = session('code');

    // پیدا کردن کاربر با این شماره همراه
    $user = User::where('mobile', $mobileNumber)->first();

    // دریافت رمز عبور جدید از فرم
    $newPassword = $request->password;

    // بررسی صحت کد وارد شده
    if ($enteredCode == $sessionCode) {
        // اگر کد صحیح بود
        if ($newPassword) {
            // اگر رمز عبور جدید هم ارائه شده باشد
            $validatedData = $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            // رمز عبور جدید را ذخیره می‌کنیم
            $newPassword = $validatedData['password'];
            $this->changepassword($newPassword, $mobileNumber);
        }

        // کاربر را وارد سیستم می‌کنیم
        Auth::login($user);

        // شماره همراه را از سشن پاک می‌کنیم
        if (session()->has('mobile')) {
            session()->forget('mobile');
        }

        // کاربر را به صفحه ادمین هدایت می‌کنیم
        return redirect()->route('adminshow');

    } else {
        // اگر کد نامعتبر بود
        // کاربر را به صفحه ورود با پیام خطا بازمی‌گردانیم
        return redirect()->route('login')->with('msg', 'کد نامعتبر است');
    }
}

    private function changepassword($pass, $mobile)
    {
        //آپدیت پسورد
        User::where('mobile', $mobile)->update(['password' => Hash::make($pass)]);
    }

    public function changepass(Request $request)
    {
        //فرستادن اس ام اس و ریدایرکت به صفحه عوض کردن رمز
        $this->index($request);

        return view('auth.changepass');
    }

    public function recode(Request $request)
    {
        //ارسال اس ام اس دوباره و نشان دادن پیام
        $this->index($request);
        return Redirect::back()->with(['msg' => 'منتظر بمانید']);
    }



    public function login_user($user)
    {
        Auth::login($user);
    }
}
