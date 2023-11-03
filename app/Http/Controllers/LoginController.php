<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function loginproses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password'  => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Login Failed')->autoclose(3000)->toToast();
            return redirect(route('login'));
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            Alert::success('Success', 'Login Success')->autoclose(3000)->toToast();
            return redirect(route('admin.admin'));
        } else {
            Alert::error('Error', 'Login Failed')->autoclose(3000)->toToast();
            return redirect(route('login'));
        }

    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function registerproses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'email' => 'required|email',
            'password'  => 'required'
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Register Failed')->autoclose(3000)->toToast();
            return redirect(route('register'));
        }

        $credentials = $request->only('name', 'email', 'password');

        if (Auth::attempt($credentials)) {
            Alert::success('Success', 'Register Success')->autoclose(3000)->toToast();
            return redirect(route('admin.admin'));
        } else {
            Alert::error('Error', 'Register Failed')->autoclose(3000)->toToast();
            return redirect(route('register'));
        }
    }


    public function logout()
    {
        Auth::logout();
        Alert::success('Success', 'Logout Success')->autoclose(3000)->toToast();
        return redirect(route('login'));
    }

}
