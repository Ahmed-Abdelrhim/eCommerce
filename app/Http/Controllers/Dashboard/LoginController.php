<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //View Admin Login Form
    public function adminLoginForm()
    {
        return view('dashboard.auth.login');
    }

    //Checks If Admin In Exists In Database
    public function checkAdminIfExists(AdminLoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? 'true' : 'false';

        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin-dashboard');
        } else {
            return redirect()->back()->with('error','Wrong Data Failed To Login');
        }
    }

    public function show() {
        return view('layouts.admin');
    }


}
