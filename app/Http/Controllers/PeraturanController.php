<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use App\Http\Requests\StorePeraturanRequest;
use App\Http\Requests\UpdatePeraturanRequest;
use App\Models\Akses;
use App\Models\Kategori;
use App\Models\Tag;
use App\Models\Tahun;
use App\Models\Sumber;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $peraturans = Peraturan::orderBy('created_at', 'desc')->get();

        return response()->view("pages.admin.product_hukum.produk_hukum", [
            "peraturans" => $peraturans,
            "users" => User::query()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $peraturans = Peraturan::query()->get();
        $categoryHukums = Kategori::query()->get();
        $tagPeraturans = Tag::query()->get();
        $tahuns = Tahun::query()->get();
        if (auth()->user()->role == 'admin') {
            $tipeHukums = Sumber::query()->get();
        } else {
            $tipeHukums = Sumber::query()->where('user_id', auth()->id())->first();
        }
        return response()->view("pages.admin.product_hukum.tambah_product_hukum", [
            "peraturans" => $peraturans,
            "kategoris" => $categoryHukums,
            "tags" => $tagPeraturans,
            "tahuns" => $tahuns,
            "tipeHukums" => $tipeHukums
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeraturanRequest $request)
    {
        // dd($request);
        if ($request->file("file")) {
            $extension = $request->file("file")->getClientOriginalExtension();
            if ($extension !== 'pdf') {
                return back()->withErrors(['file' => 'Only PDF files are allowed.']);
            }
            $randomString = \Illuminate\Support\Str::random(10);
            // Automatically generate slug from product hukum name if not provided
            $slug = $request->input('slug') ?: \Illuminate\Support\Str::slug(\Illuminate\Support\Str::title($request->input('nama')), '-');
            $file = $slug . "-" . now()->timestamp . "-" . $randomString . "." . $extension;
            // memasukan datanya kedalam direktori tanpa prefix public
            $request->file("file")->storeAs("document", $file);

            // Ensure only the file name is stored in the database, not the path
            $productHukumData = $request->except('file');
            $productHukumData['file'] = $file; // Store only the file name in the database

            // Handle nested array data if present
            if ($request->has('status_hukum')) {
                $productHukumData['status_hukum'] = json_encode($request->input('status_hukum'));
            }
      
        } else {
            $productHukumData = $request->all();
            // Handle nested array data if present
            if ($request->has('status_hukum')) {
                $productHukumData['status_hukum'] = json_encode($request->input('status_hukum'));
            }
        }

        // Capitalize the first letter of 'nama', 'deskripsi', and 'judul'
        if (isset($productHukumData['deskripsi'])) {
            $productHukumData['deskripsi'] = \Illuminate\Support\Str::title($productHukumData['deskripsi']);
        }
        if (isset($productHukumData['judul'])) {
            $productHukumData['judul'] = \Illuminate\Support\Str::title($productHukumData['judul']);
        }

        // dd($productHukumData);
        $peraturans = Peraturan::query()->create($productHukumData); 
        $peraturans->tagPeraturans()->sync($request->input("subjek"));
        return redirect()->route("index.peraturan")->with("message", "Add Peraturan Successfully");
    }


   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id,  Peraturan $peraturans)
    {
        $product = $peraturans->query()->find($id);
        if (!$product) {
            return back()->withErrors(['error' => 'Product Hukum not found.']);
        }
        $categoryHukums = Kategori::query()->get();
        $tagPeraturans = Tag::query()->get();
        $peraturans = Peraturan::query()->get();
        $tahuns = Tahun::query()->get();
        if (auth()->user()->role == 'admin') {
            $tipeHukums = Sumber::query()->get();
        } else {
            $tipeHukums = Sumber::query()->where('user_id', auth()->id())->first();
           
        }
        return response()->view("pages.admin.product_hukum.update_product_hukum", [
            "peraturans" => $peraturans,
            "tags" => $tagPeraturans,
            "kategoris" => $categoryHukums,
            "product_hukum" => $product,
            "tahuns" => $tahuns,
            "tipeHukums" => $tipeHukums
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, string $slug, UpdatePeraturanRequest $request)
    {
        // dd($request);
        $newSlug = $request->input('slug') ?: \Illuminate\Support\Str::slug($request->input('nama'), '-');

        if ($request->file("file")) {
            $extension = $request->file("file")->getClientOriginalExtension();
            if ($extension !== 'pdf') {
                return back()->withErrors(['file' => 'Only PDF files are allowed.']);
            }
            $randomString = \Illuminate\Support\Str::random(10);
            $file =  $newSlug . "-" . now()->timestamp . "-" . $randomString . "." . $extension;
            // memasukan datanya kedalam direktori tanpa prefix public
            $request->file("file")->storeAs("document", $file);
        }

        $peraturans = Peraturan::query()->where("id", $id)->where("slug", $slug)->first();
        if (!$peraturans) {
            return back()->withErrors(['error' => 'Product Hukum not found.']);
        }

        $requestData = $request->except(['slug', 'file']);
        if (isset($requestData['deskripsi'])) {
            $requestData['deskripsi'] = \Illuminate\Support\Str::title($requestData['deskripsi']);
        }
        if (isset($requestData['judul'])) {
            $requestData['judul'] = \Illuminate\Support\Str::title($requestData['judul']);
        }

        $peraturans->update($requestData + ['slug' => $newSlug, 'file' => $file ?? $peraturans->file]);
        if ($request->input("subjek")) {
            $peraturans->tagPeraturans()->sync($request->input("subjek"));
        }
        return redirect()->route("index.peraturan")->with("message", "Update Product Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peraturans = Peraturan::query()->find($id);
        $peraturans->delete();
        $peraturans->save();
        return response()->redirectToRoute("index.peraturan")->with("message", "Destroy Peraturan Successfully");
    }

    public function viewDelete()
    {
        $peraturans = Peraturan::onlyTrashed()->get();
        return response()->view("pages.admin.product_hukum.view_delete_product_hukum", [
            "peraturans" => $peraturans
        ]);
    }

    public function restore(string $id): RedirectResponse
    {
        $peraturans = Peraturan::withTrashed()->find($id);
        $peraturans->restore();
        return response()->redirectToRoute("index.peraturan")->with("message", "Restore Peraturan Successfully");
    }
}
