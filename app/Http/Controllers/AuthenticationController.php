<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthenticationController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    public function register()
    {
        return view('Authentication.register');
    }

    public function store_register(Request $request)
    {
        $First_Name = $request->First_Name;
        $Email = $request->Email;
        $Password = $request->Password;
        $Last_Name = $request->Last_Name;
        $Phone = $request->Phone;

        $reg = user::where('email', $Email)->first();
        if ($reg) {
            return redirect()->away('/authentication/register')->with('email_error', 'Email already exists');
        } else {
            $user = new user;
            $user->first_name = $First_Name;
            $user->email = $Email;
            $user->password = Hash::make($Password);
            $user->last_name = $Last_Name;
            $user->phone = $Phone;
            $user->save();

            return redirect()->away('/');
        }
    }

    public function login()
    {
        return view('Authentication.login');
    }

    public function login_go(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required',
        ]);

        $user = User::where('email', $request->Email)->first();

        if (!$user || !Hash::check($request->Password, $user->password)) {
            return back()->with('email_error', 'Email or Password incorrect');
        }

        session(['user_id' => $user->id]);

        return redirect('/')->with('email_success', 'Email correct');
    }

    public function logout()
    {
        session()->forget('user_id');

        return redirect('/authentication/login');
    }
}
