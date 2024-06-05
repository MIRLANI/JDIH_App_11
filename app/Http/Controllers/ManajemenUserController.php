<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManajemenUserController extends Controller
{
    
   public function manejementUser()
   {
      $users = User::query()->get();
      return response()->view("pages.admin.ManajemenUser.manajemenUser", [
        "users" => $users
      ]);
   }

   public function store(Request $request)
   {
    //    $request->validate([
    //        'username' => 'required|string|unique:users',
    //        'password' => 'required',
    //        'role' => 'required|string|',
    //    ]);

      
       $username = $request->input("username");
       $password = bcrypt($request->input("password"));
       $role = $request->input("role");
       User::query()->create([
        "username" => $username,
        "password" => Hash::make($password),
        "role" => $role
    ]);
    return response()->redirectToRoute("manejementUser");
      
   }
}
