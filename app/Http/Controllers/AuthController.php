<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function getLogin()
    {
        return response()->view('auth.login');
    }

    public function postLogin(UserRequest $request)
    {

        // digunakan untuk menyimpan mudahkan user supaya tidak memasukan lagi  datanya berulang kali
        Session::flash('email', $request->input('email'));
        Session::flash('password', $request->input('password'));

        // ketika Auth:attempt itu berhasil maka secara otomatis laravel akan dibuatkan session
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])) {

            return redirect()->route('dashboard')->with('success', 'Task Created Successfully!');
        } else {

            return redirect()->route('getLogin')->with('message', 'email atau password anda salah');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->redirectToRoute('getLogin');
    }
}
