<?php

namespace App\Http\Controllers;

use App\Models\TipeHukum;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
       $request->validate([
           'email' => 'required|string|unique:users',
           'username' => 'required|string|unique:users',
           'password' => 'required',
           'role' => 'required',
       ]);

      
       $email = $request->input("email");
       $username = $request->input("username");
       $password = bcrypt($request->input("password"));
       $role = $request->input("role");
       $user = User::query()->create([
        "email" => $email,
        "username" => $username,
        "password" => $password,
        "role" => $role
    ]);

    TipeHukum::updateOrCreate(['user_id' => $user->id, "nama" => $user->username]);
    
    return response()->redirectToRoute("manejementUser")->with("message", "Add  $role $username Successfull");
      
   }
   public function update(Request $request, string $id)
   {
      $request->validate([
         'email' => 'required|string|unique:users',
         'username' => 'required|string|unique:users',
         'role' => 'required',
     ]);

       $user = User::query()->find($id);
       if ($user) {
           $user->fill($request->only(['email','username', 'role']));
           if ($request->filled('password')) {
               $user->password = $request->input("password");
           }
           $user->save();
           return response()->redirectToRoute("manejementUser")->with("message", "Update $request->role $request->username   Successfull");
       }
       return response()->redirectToRoute("manejementUser")->with("message", "Gagal Update $request->role $request->username   Successfull");

   }

   public function delete(string $id)
   {
      $akun = User::query()->find($id);
      if ($akun->sumberPeraturan()->exists() || $akun->productHukums()->exists()) {
         return response()->redirectToRoute("manejementUser")->with("error", "User is still in use and cannot be deleted.");
      }
      $akun->delete();
      return response()->redirectToRoute("manejementUser")->with("message", "Delete  Successfull");
   }
}
