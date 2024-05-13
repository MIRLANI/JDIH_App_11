<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
   public function getLogin()
   {
      return response()->view("auth.login");
   }


   public function postLogin(UserRequest $request)
   {

      // digunakan untuk menyimpan mudahkan user supaya tidak memasukan lagi  datanya berulang kali
      Session::flash("username", $request->input("username"));
      Session::flash("password", $request->input("password"));

      // ketika Auth:attempt itu berhasil maka secara otomatis laravel akan dibuatkan session
      if (Auth::attempt([
         "username" => $request->input("username"),
         "password" => $request->input("password")
      ])) {

         return redirect()->route("dashboard")->with('success', 'Task Created Successfully!');
      } else {
       
         return redirect()->route("getLogin")->with("message", "username atau password anda salah");
      }
   }
}
