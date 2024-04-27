<?php

namespace App\Http\Controllers;

use App\Models\SubjekHukum;
use App\Http\Requests\StoreSubjekHukumRequest;
use App\Http\Requests\UpdateSubjekHukumRequest;
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjekHukumRequest $request)
    {
        //
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
    public function edit(SubjekHukum $subjekHukum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjekHukumRequest $request, SubjekHukum $subjekHukum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubjekHukum $subjekHukum)
    {
        //
    }
}
