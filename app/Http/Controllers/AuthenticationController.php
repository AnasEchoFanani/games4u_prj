<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


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
        $request->validate([
            'First_Name' => 'required',
            'Email' => 'required|email',
            'Password' => 'required',
            'Last_Name' => 'required',
            'Phone' => 'required',
        ]);

        $email = $request->Email;
        $existingUser = User::where('email', $email)->first();

        if ($existingUser) {
            return redirect()->away('/authentication/register')->with('email_error', 'Email already exists');
        } else {
            $user = new User;
            $user->first_name = $request->First_Name;
            $user->email = $email;
            $user->password = Hash::make($request->Password);
            $user->last_name = $request->Last_Name;
            $user->phone = $request->Phone;
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
        session(['first_name' => $user->first_name]);
        session(['last_name' => $user->last_name]);

        return redirect('/')->with('email_success', 'Email correct');
    }

    public function logout()
    {
        Session::forget('user_id');

        return redirect('/');
    }
}
