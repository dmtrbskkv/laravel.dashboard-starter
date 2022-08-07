<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorizationController extends Controller
{
    public function showLoginPage(Request $request)
    {
        return view('dashboard.pages.login');
    }

    public function login(Request $request)
    {
        $errors = [];

        $email    = $request->post('email');
        $password = $request->post('password');

        if ( ! $email || ! $password) {
            $errors[] = 'Заполните все поля';
        }

        $authStatus = Auth::attempt(['email' => $email, 'password' => $password], true);
        if ( ! $authStatus) {
            $errors[] = 'Такого пользователя нет. Попробуйте ещё раз';
        }

        if ($errors) {
            return redirect()->route('login')->with('errors', $errors);
        }

        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('login');
    }

}
