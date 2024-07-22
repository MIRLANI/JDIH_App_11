<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreSubjekHukumRequest;
use App\Http\Requests\UpdateSubjekHukumRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $tagPeraturans = Tag::query()->orderBy("id", "desc")->get();
        return response()->view("pages.admin.subjek_hukum.subjek_hukum",[
            "tagPeraturans" => $tagPeraturans
        ]);
    }

    

    public function store(StoreSubjekHukumRequest $request)
    {
        try {
            $subjekHukum = Tag::query()->create($request->validated());
            $subjekHukum->save();
            return response()->redirectToRoute("index.tag")->with("message", "Add Subjek Peraturan Successfully");
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    
    
    public function update(string $id, UpdateSubjekHukumRequest $request): RedirectResponse
    {
        $ketegori = Tag::query()->find($id);
        $ketegori->nama = $request->input("nama");
        $ketegori->update();
        return redirect()->route("index.tag")->with("message", "Subjek Peraturan Update Successfull");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Tag $subjekHukum)
    {
        $data = $subjekHukum::query()->find($id);
        if ($data->peraturans()->exists()) {
            return redirect()->route("index.tag")->with("error", "Peraturan is still in use and cannot be deleted.");
        }
        $data->delete();
        return redirect()->route("index.tag")->with("message", "Subjek Peraturan Delete Successfull");
    }

    

}
