<?php

namespace App\Http\Controllers;

use App\Models\Password;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PasswordController extends Controller
{
    public function index(): Response
    {
        $aksesDokumes = auth()->user()->role == 'admin' ? Password::query()->get() : Password::where('user_id', auth()->id())->get();

        return response()->view('pages.admin.setting.password.password_dokumen', [
            'passwords' => $aksesDokumes,
        ]);
    }

    public function destroy(string $id)
    {
        $Password = Password::query()->find($id);
        if ($Password->peraturans()->exists()) {
            return redirect()->route('index.password')->with('error', 'Password Dokumen is still in use and cannot be deleted.');
        }
        $Password->delete();

        return redirect()->route('index.password')->with('message', 'Hapus Password Dokumen Berhasil ');
    }

    public function update(string $id, Request $request)
    {
        $request->validate([
            'password_name' => ['required'],
            'password' => 'required',
        ]);
        $password = Password::query()->find($id);
        $password->update([
            'password_name' => $request->input('password_name'),
            'password' => $request->input('password'),
        ]);

        return redirect()->route('index.password')->with('success', 'Password Dokumen Berhasil Diubah');
    }

    public function store(Request $request)
    {

        $request->validate([
            'password_name' => ['required', 'unique:passwords,password_name'],
            'password' => 'required',
        ]);

        Password::query()->create([
            'user_id' => $request->input('user_id'),
            'password_name' => $request->input('password_name'),
            'password' => $request->input('password'),
        ]);

        return redirect()->route('index.password')->with('success', 'Password Dokumen Berhasil Ditambahkan');

    }
}
