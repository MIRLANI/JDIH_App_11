<?php

namespace App\Http\Controllers;

use App\Models\AbstrakHukum;
use App\Http\Requests\StoreAbstrakHukumRequest;
use App\Http\Requests\UpdateAbstrakHukumRequest;
use Illuminate\Http\Response;

class AbstrakHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $abstrakHukums = AbstrakHukum::query()->get();
        return response()->view("pages.admin.abstract_hukum.abstract_hukum", [
            "AbstractHukums" => $abstrakHukums
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view("pages.admin.abstract_hukum.tambah_abstract_hukum");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAbstrakHukumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AbstrakHukum $abstrakHukum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AbstrakHukum $abstrakHukum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAbstrakHukumRequest $request, AbstrakHukum $abstrakHukum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AbstrakHukum $abstrakHukum)
    {
        //
    }
}
