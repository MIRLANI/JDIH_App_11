<?php

namespace App\Http\Controllers;

use App\Models\TipeHukum;
use App\Models\User;
use Illuminate\Http\Request;

class TipeHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
     {
        $tipeHukums = TipeHukum::query()->orderBy('created_at', 'desc')->get();
        $users = User::query()
            ->whereDoesntHave('sumberPeraturan')
            ->where('role', '!=', 'admin')
            ->get();
        return response()->view("pages.admin.tipe_hukum.tipe_hukum", [
            "tipeHukums" => $tipeHukums,
            "users" => $users
        ]);
     }

   
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama' => 'required|string|max:255|unique:tipe_hukums,nama', 
                'user_id' => 'required', 
            ]);
            TipeHukum::query()->create($validatedData);
            return response()->redirectToRoute("index.tipe_hukum")->with("message", "Add Sumber Peraturan Successful");
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, Request $request, TipeHukum $tipeHukum)
    {
        $tipeHukum->query()->find($id)->update($request->all());
        return response()->redirectToRoute("index.tipe_hukum")->with("message", "Sumber Peraturan Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, TipeHukum $tipeHukum, User $user)
    {
   
        $user = $user->query()->find($id);
       $tipe =  $tipeHukum->query()->where("user_id", $id)->first();
       if ($tipe->product_hukums()->exists()) {
           return redirect()->route("index.tipe_hukum")->with("error", "Tipe Hukum is still in use and cannot be deleted.");
       }
       $tipe->delete();
       $user->delete(); 
    
       return response()->redirectToRoute("index.tipe_hukum")->with("message", "Sumber Peraturan Deleted Successfully");
    }
}
