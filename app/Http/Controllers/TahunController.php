<?php

namespace App\Http\Controllers;

use App\Models\Tahun;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response as FacadesResponse;

class TahunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $tahuns = Tahun::query()->orderBy('tahun', 'desc')->get();
        return response()->view("pages.admin.tahun.tahun_hukum", [
            "tahuns" => $tahuns
        ]);
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "tahun" => "required|numeric|unique:tahuns,tahun"
        ]);

        Tahun::query()->create([
            "tahun" => $request->input("tahun")
        ]);

        return response()->redirectToRoute("index.tahun_hukum")->with("message", "Tambah tahun hukum berhasil");
    }

    /**
     * Display the specified resource.
     */
    public function show(Tahun $tahun)
    {
        //
    }

    
    public function update(string $id, Request $request)
    {
        
        $request->validate([
            "tahun" => "required|numeric|unique:tahuns,tahun"
        ]);
        
         $tahun = Tahun::query()->find($id);
         $tahun->tahun = $request->input("tahun");
         $result = $tahun->update();
        if ($result) {
            return redirect()->route("index.tahun_hukum")->with('message', 'Update successful');
        } else {
            return redirect()->route("index.tahun_hukum")->with('error', 'Update failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tahun = Tahun::query()->find($id);

        if ($tahun->product_hukums()->exists()) {
            return redirect()->route("index.tahun_hukum")->with("error", "Tahun is still in use and cannot be deleted.");
        }
        $tahun->delete();
        return redirect()->route("index.tahun_hukum")->with("message", "Delete successful");
    }
}
