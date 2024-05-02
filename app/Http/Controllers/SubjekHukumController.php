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
        $subjekHukums = SubjekHukum::query()->get();
        return response()->view("pages.admin.subjek_hukum.subjek_hukum",[
            "subjekHukums" => $subjekHukums
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view("pages.admin.subjek_hukum.tambah_subjek_hukum");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjekHukumRequest $request)
    {
        $subjekHukum = SubjekHukum::query()->create($request->all());
        $subjekHukum->save();
        return response()->redirectToRoute("index.subjek_hukum")->with("message", "Add Subjek Hukum Successfully" );
    }

    /**
     * Display the specified resource.
     */
    public function show(SubjekHukum $subjekHukum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug, SubjekHukum $categoryHukum): Response
    {
        return response()->view("pages.admin.subjek_hukum.update_subjek_hukum",
            [
                "subjekHukum" => $categoryHukum->query()->where("slug", $slug)->first()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $slug, UpdateSubjekHukumRequest $request): RedirectResponse
    {
        $categoryHukum = SubjekHukum::query()->where("slug", $slug)->first();
        $categoryHukum->nama = $request->input("nama");
        $categoryHukum->update();
        return redirect()->route("index.subjek_hukum")->with("message", "Subjek Hukum Update Successfull");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug, SubjekHukum $subjekHukum)
    {
        $data = $subjekHukum::query()->where("slug", $slug)->first();
        $data->delete();
        return redirect()->route("index.subjek_hukum")->with("message", "Subjek Hukum Delete Successfull");
    }

    public function viewDelete()
    {
         $subjekHukums = SubjekHukum::onlyTrashed()->get();
        return response()->view("pages.admin.subjek_hukum.view_delete_subjek_hukum", [
            "subjekHukums" =>  $subjekHukums
        ]);
    }

    public function restore(string $slug): RedirectResponse
    {
        $subjekHukum = SubjekHukum::withTrashed()->where("slug", $slug)->first();
        $subjekHukum->restore();
        return response()->redirectToRoute("index.subjek_hukum")->with("message", "Restore Subjek Hukum Successfully");  
    }
}
