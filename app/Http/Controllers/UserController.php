<?php

namespace App\Http\Controllers;

use Rules\Password;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        $logo=Menu::first();


       return view('panel.user',compact('users','logo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => ['required', 'string', 'max:255'],
//             'family' => ['required', 'string', 'max:255'],
//             'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
//             'mobile' => ['required', 'string', 'max:255','unique:'.User::class],
//             'password' => ['required', 'confirmed', Password::defaults()],
//         ]);



//         $query=
//         [
//    'name' => $request->name,
//   'family' =>$request->family,
//   'email' => $request->email,
//  'mobile' =>$request->mobile,
//   'role' =>  $request->role,
//   'password' => Hash::make($request->password),

//     ];
//    User::create($query);


//     $txt = 'پیام شما با موفقیت ثبت شد';
//     return redirect(route('admins.index'))->withSuccess(' کاربر ثبت شد');
//     }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
       //


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user=User::find($id);

        return view('panel.admins.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $query=
        [
            'name' => $request->name,
            'family' =>$request->family,
            'email' => $request->email,
            'mobile' =>$request->mobile,
            'password' => Hash::make($request->password),

        ];

        $user->update($query);
        return view('panel.admins.edit',compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user_id = $user->id;
        // Product::where(
        //     ['owner_id', '=', $id])->update(['owner_id' => null]);
        $user_have_warranty = $this -> user_have_warranty($user_id);
        //Product::where('owner_id', $id)->update(['owner_id' => null]);
        if ($user_have_warranty)
        {
            $user->delete();
        }


      return redirect()->route('admins.index');
    }
}




