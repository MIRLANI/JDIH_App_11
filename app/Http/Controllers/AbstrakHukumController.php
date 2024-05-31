<?php

namespace App\Http\Controllers;

use App\Models\AbstrakHukum;
use App\Http\Requests\StoreAbstrakHukumRequest;
use App\Http\Requests\UpdateAbstrakHukumRequest;
use App\Models\ProductHukum;
use Illuminate\Http\Response;

class AbstrakHukumController extends Controller
{
   
    public function index(): Response
    {
        $abstrakHukums = AbstrakHukum::query()->get();
        $produkHukum = ProductHukum::doesntHave('abstrakHukum')->get();
        return response()->view("pages.admin.abstract_hukum.abstract_hukum", [
            "AbstractHukums" => $abstrakHukums,
            "produkHukum" => $produkHukum
        ]);
    }

  
    public function create(): Response
    {
        $produkHukum = ProductHukum::doesntHave('abstrakHukum')->get();
        return response()->view("pages.admin.abstract_hukum.tambah_abstract_hukum", [
            "produkHukum" => $produkHukum
        ]);
    }

   
    public function store(StoreAbstrakHukumRequest $request)
    {
        try {
            $validated = $request->validated();
            AbstrakHukum::create($request->all());
            return redirect()->route("index.abstrack_hukum")->with("message", "Create abstrak peraturan successful");
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function update(string $id, UpdateAbstrakHukumRequest $request)
    {
        $request->validated();
        $abstrakHukum = AbstrakHukum::query()->find($id);
        $abstrakHukum->update($request->all());
        return redirect()->route("index.abstrack_hukum")->with("message", "Update successful");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $abstrakHukum =  AbstrakHukum::query()->find($id);
        $abstrakHukum->delete();
         return redirect()->route("index.abstrack_hukum")->with("message", "Delete successful");;
    }
}
