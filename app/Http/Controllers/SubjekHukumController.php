<?php

namespace App\Http\Controllers;

use App\Models\SubjekHukum;
use App\Http\Requests\StoreSubjekHukumRequest;
use App\Http\Requests\UpdateSubjekHukumRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class SubjekHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $subjekHukums = SubjekHukum::query()->orderBy("nama", "desc")->get();
        return response()->view("pages.admin.subjek_hukum.subjek_hukum",[
            "subjekHukums" => $subjekHukums
        ]);
    }

    

    public function store(StoreSubjekHukumRequest $request)
    {
        try {
            $subjekHukum = SubjekHukum::query()->create($request->validated());
            $subjekHukum->save();
            return response()->redirectToRoute("index.subjek_hukum")->with("message", "Add Subjek Peraturan Successfully");
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    
    
    public function update(string $id, UpdateSubjekHukumRequest $request): RedirectResponse
    {
        $categoryHukum = SubjekHukum::query()->find($id);
        $categoryHukum->nama = $request->input("nama");
        $categoryHukum->update();
        return redirect()->route("index.subjek_hukum")->with("message", "Subjek Peraturan Update Successfull");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, SubjekHukum $subjekHukum)
    {
        $data = $subjekHukum::query()->find($id);
        if ($data->product_hukums()->exists()) {
            return redirect()->route("index.subjek_hukum")->with("error", "Peraturan is still in use and cannot be deleted.");
        }
        $data->delete();
        return redirect()->route("index.subjek_hukum")->with("message", "Subjek Peraturan Delete Successfull");
    }

    

}
