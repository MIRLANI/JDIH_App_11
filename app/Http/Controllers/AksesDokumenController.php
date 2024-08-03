<?php

namespace App\Http\Controllers;

use App\Models\Password;
use App\Models\Peraturan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AksesDokumenController extends Controller
{
   

    public function index()
    {
        $peraturans = Peraturan::query()->where("user_id", auth()->user()->id)->get();
        $passwords = Password::query()->where("user_id", auth()->user()->id)->get();
        return response()->view('pages.admin.setting.akses.akses_dokumen', [
            "peraturans" => $peraturans,
            "passwords" => $passwords
        ]);
    }


    public function update(string $id, Request $request)
    {
        $peraturan = Peraturan::query()->where("user_id", auth()->user()->id)->find($id);
        $peraturan->password_id = $request->input("password_id");
        $peraturan->save();
        return redirect()->route('index.akses')->with('success', 'Akses Dokumen Berhasil Diubah');
    }

   
}
