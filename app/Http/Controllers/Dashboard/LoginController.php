<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\guarded;
class LoginController extends Controller
{
//    use guarded;
    //View Admin Login Form Function
    public function adminLoginForm()
    {
        return view('dashboard.auth.login');
    }

    //Checks If Admin In Exists In Database Function
    public function checkAdminIfExists(AdminLoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? 'true' : 'false';
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        } else {
            return errors('Username or password is wrong');
        }
    }

    //Admin Logout Function
    public function logoutAdmin() {
        //using logout trait
        $adminLogout = auth()->guard('admin');
        $adminLogout->logout();

        return redirect()->route('admin.login');
    }

    }
