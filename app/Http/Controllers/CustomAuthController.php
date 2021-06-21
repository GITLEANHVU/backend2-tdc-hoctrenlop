<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session as FacadesSession;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = [
            "user_email" => $request->email,
            "password" => $request->password
        ];

        /**
         * lúc này chưa tìm ra cái attemp ở đâu cả, nên ĐỔI TÊN để test!
         * doi ten thanh Auth::leanhvu -> bi loi va phat hien co SessionGuard
         * tìm thấy attempt trong SessionGuard.php
         */
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'user_name' => $data['name'],
            'user_email' => $data['email'],
            'user_password' => FacadesHash::make($data['password']),
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            // lấy user.

            // đưa user vào dashboard để hiển thị
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut()
    {
        FacadesSession::flush();
        Auth::logout();

        return Redirect('login');
    }
}
