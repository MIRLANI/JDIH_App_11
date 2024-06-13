<?php

namespace App\Http\Controllers;

use App\Models\ProductHukum;
use App\Http\Requests\StoreProductHukumRequest;
use App\Http\Requests\UpdateProductHukumRequest;
use App\Models\Akses;
use App\Models\CategoryHukum;
use App\Models\SubjekHukum;
use App\Models\Tahun;
use App\Models\TipeHukum;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ProductHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $productHukums = ProductHukum::orderBy('created_at', 'desc')->get();

        return response()->view("pages.admin.product_hukum.produk_hukum", [
            "productHukums" => $productHukums,
            "users" => User::query()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $productHukums = ProductHukum::query()->get();
        $categoryHukums = CategoryHukum::query()->get();
        $subjekHukums = SubjekHukum::query()->get();
        $tahuns = Tahun::query()->get();
        if (auth()->user()->role == 'admin') {
            $tipeHukums = TipeHukum::query()->get();
        } else {
            $tipeHukums = TipeHukum::query()->where('user_id', auth()->id())->first();
        }
        return response()->view("pages.admin.product_hukum.tambah_product_hukum", [
            "product_hukums" => $productHukums,
            "category_hukums" => $categoryHukums,
            "subjek_hukums" => $subjekHukums,
            "tahuns" => $tahuns,
            "tipeHukums" => $tipeHukums
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductHukumRequest $request)
    {
        // dd($request);
        if ($request->file("file")) {
            $extension = $request->file("file")->getClientOriginalExtension();
            if ($extension !== 'pdf') {
                return back()->withErrors(['file' => 'Only PDF files are allowed.']);
            }
            $randomString = \Illuminate\Support\Str::random(10);
            // Automatically generate slug from product hukum name if not provided
            $slug = $request->input('slug') ?: \Illuminate\Support\Str::slug($request->input('nama'), '-');
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
        // dd($productHukumData);
        $productHukum = ProductHukum::query()->create($productHukumData); 
        $productHukum->subjekHukums()->sync($request->input("subjek"));
        return redirect()->route("index.product_hukum")->with("message", "Add Peraturan Successfully");
    }


   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id,  ProductHukum $productHukum)
    {
        $product = $productHukum->query()->find($id);
        if (!$product) {
            return back()->withErrors(['error' => 'Product Hukum not found.']);
        }
        $categoryHukums = CategoryHukum::query()->get();
        $subjekHukums = SubjekHukum::query()->get();
        $productHukums = ProductHukum::query()->get();
        $tahuns = Tahun::query()->get();
        if (auth()->user()->role == 'admin') {
            $tipeHukums = TipeHukum::query()->get();
        } else {
            $tipeHukums = TipeHukum::query()->where('user_id', auth()->id())->first();
           
        }
        return response()->view("pages.admin.product_hukum.update_product_hukum", [
            "product_hukums" => $productHukums,
            "subjek_hukums" => $subjekHukums,
            "category_hukums" => $categoryHukums,
            "product_hukum" => $product,
            "tahuns" => $tahuns,
            "tipeHukums" => $tipeHukums
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, string $slug, UpdateProductHukumRequest $request)
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

        $productHukum = ProductHukum::query()->where("id", $id)->where("slug", $slug)->first();
        if (!$productHukum) {
            return back()->withErrors(['error' => 'Product Hukum not found.']);
        }
        $productHukum->update($request->except(['slug', 'file']) + ['slug' => $newSlug, 'file' => $file ?? $productHukum->file]);
        if ($request->input("subjek")) {
            $productHukum->subjekHukums()->sync($request->input("subjek"));
        }
        return redirect()->route("index.product_hukum")->with("message", "Update Product Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productHukum = ProductHukum::query()->find($id);
        $productHukum->delete();
        $productHukum->save();
        return response()->redirectToRoute("index.product_hukum")->with("message", "Destroy Peraturan Successfully");
    }

    public function viewDelete()
    {
        $productHukums = ProductHukum::onlyTrashed()->get();
        return response()->view("pages.admin.product_hukum.view_delete_product_hukum", [
            "productHukums" => $productHukums
        ]);
    }

    public function restore(string $id): RedirectResponse
    {
        $productHukum = ProductHukum::withTrashed()->find($id);
        $productHukum->restore();
        return response()->redirectToRoute("index.product_hukum")->with("message", "Restore Peraturan Successfully");
    }
}
