<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryHukumRequest;
use App\Http\Requests\UpdateCategoryHukumRequest;
use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $kategoryHukums = Kategori::query()->orderBy('id', 'desc')->get();

        return response()->view('pages.admin.kategori.kategori', [
            'kategory_hukums' => $kategoryHukums,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryHukumRequest $request)
    {
        try {
            Kategori::create($request->validated());

            return redirect()->route('index.kategori')->with('message', 'Add Katagori Peraturan Successful');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->route('index.kategori')->with('error', 'Validation failed: '.$e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, UpdateCategoryHukumRequest $request): RedirectResponse
    {
        try {
            $ketegori = Kategori::findOrFail($id);
            $ketegori->update($request->validated());

            return redirect()->route('index.kategori')->with('message', 'Catagori Peraturan Update Successful');
        } catch (\Exception $e) {
            return redirect()->route('index.kategori')->with('error', 'Update failed: '.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Kategori $ketegori): RedirectResponse
    {
        $data = $ketegori::query()->find($id);
        if ($data->peraturans()->exists()) {
            return redirect()->route('index.kategori')->with('error', 'Category is still in use and cannot be deleted.');
        }
        $data->delete();

        return redirect()->route('index.kategori')->with('message', 'Catagori Peraturan Delete Successfull');
    }

    public function restore(string $slug): RedirectResponse
    {
        $ketegori = Kategori::withTrashed()->where('slug', $slug)->first();
        $ketegori->restore();

        return response()->redirectToRoute('index.kategori')->with('message', 'Restore Category Peraturan Successfully');
    }
}
