<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Invitation;
use App\Models\Gift;
use App\Models\Message;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\ExampleEmail;
use App\Http\Controllers\SmsIR_VerificationCode;
use App\Http\Controllers\SMSIR_MessageController;
use Exception;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'family' => ['required', 'string', 'max:255'],
            'inv' => ['string', 'nullable', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'mobile' => ['required', 'regex:/[0]{1}[0-9]{10}/', 'max:20', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        date_default_timezone_set("Asia/Tehran");
        $inviteCode = $this->generateInviteCode();

        $user = User::create([
            'name' => $request->name,
            'family' => $request->family,
            'mobile' =>$request->mobile,
            'email' =>$request ->email,
            'inv' => $request->inv,
            'invitecode'=>$inviteCode,
            'password' => Hash::make($request->password),
        ]);


        event(new Registered($user));

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
    private function generateInviteCode(){
        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
        srand((float)microtime() * 1000000);
        $i = 0;
        $code = '';

        while ($i <= 5) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $code = $code . $tmp;
            $i++;
        }
        return $code;
    }
}
