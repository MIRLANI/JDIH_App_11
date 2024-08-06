<?php

namespace App\Http\Controllers;

use App\Models\Sumber;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ManajemenController extends Controller
{
    public function manejementUser()
    {
        $users = User::query()->get();

        return response()->view('pages.admin.ManajemenUser.manajemenUser', [
            'users' => $users,
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

        $email = $request->input('email');
        $username = $request->input('username');
        $password = bcrypt($request->input('password'));
        $role = $request->input('role');
        $user = User::query()->create([
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'role' => $role,
        ]);

        // Sumber::updateOrCreate(['user_id' => $user->id, "nama" => $user->username]);

        return response()->redirectToRoute('manejementUser')->with('message', "Add  $role $username successfull");

    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'email' => '|string|unique:users',
            'username' => 'required',
            'role' => 'required',
        ]);

        $user = User::query()->find($id);
        if ($user) {
            $user->fill($request->only(['email', 'username', 'role']));
            if ($request->filled('password')) {
                $user->password = $request->input('password');
            }
            $user->save();

            return response()->redirectToRoute('manejementUser')->with('message', "Update $request->role $request->username   successfull");
        } else {
            $user = User::query()->updateOrCreate(['id' => $id], $request->all());

            return response()->redirectToRoute('manejementUser')->with('message', 'Update or Insert successfull');
        }
    }

    public function delete(string $id)
    {
        $user = User::query()->find($id);
        //   $sumber = Sumber::query()->where("user_id", $id)->first();
        //   if ($akun->sumberPeraturan()->exists() || $akun->peraturans()->exists()) {
        //      return response()->redirectToRoute("manejementUser")->with("error", "User is still in use and cannot be deleted.");
        //   }
        //   $sumber->delete();
        $user->delete();

        return response()->redirectToRoute('manejementUser')->with('message', 'Delete akun  successfull');
    }
}
