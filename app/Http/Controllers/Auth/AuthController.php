<?php

namespace App\Http\Controllers\Auth;

use Auth;

use Carbon\Carbon;


use App\Models\User;
use Cryptommer\Smsir\Smsir;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
public function loginPW(Request $request)
{

    $credentials = $request->validate([
        'mobile' => ['required', 'regex:/[0]{1}[0-9]{10}/'],
        'password' => ['required'],
    ]);
    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

            return redirect('/admins');

    } else {
        return Redirect::back()->with(['msg' => 'پسورد یا شماره تلفن نامعتبر است']);
    }
}
}
