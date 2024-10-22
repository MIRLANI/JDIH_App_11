<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeraturanRequest;
use App\Http\Requests\UpdatePeraturanRequest;
use App\Models\Kategori;
use App\Models\Peraturan;
use App\Models\Tag;
use App\Models\Tahun;
use App\Models\User;
use App\Services\PeraturanService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PeraturanController extends Controller
{
    // private PeraturanService $peraturanService; 

    // public function __construct(PeraturanService $peraturanService)
    // {
    //     $this->peraturanService = $peraturanService;
    // }

    public function index(): Response
    {
        // $peraturans = $this->peraturanService->get();

        $peraturans = Peraturan::orderBy('created_at', 'desc')->get();

        return response()->view('pages.admin.peraturan.peraturan', [
            'peraturans' => $peraturans,
            'users' => User::query()->get(),
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
            $sumbers = User::query()->where('username', '!=', 'administrator')->get();
        } else {
            $sumbers = User::query()->where('id', auth()->id())->first();
        }

        return response()->view('pages.admin.peraturan.tambah_peraturan', [
            'peraturans' => $peraturans,
            'kategoris' => $categoryHukums,
            'tags' => $tagPeraturans,
            'tahuns' => $tahuns,
            'sumbers' => $sumbers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeraturanRequest $request)
    {
        // dd($request);
        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            if ($extension !== 'pdf') {
                return back()->withErrors(['file' => 'Only PDF files are allowed.']);
            }
            $randomString = \Illuminate\Support\Str::random(10);
            // Automatically generate slug from product hukum name if not provided
            $slug = $request->input('slug') ?: \Illuminate\Support\Str::slug(\Illuminate\Support\Str::title($request->input('nama')), '-');
            $file = $slug.'-'.now()->timestamp.'-'.$randomString.'.'.$extension;
            // memasukan datanya kedalam direktori tanpa prefix public
            $request->file('file')->storeAs('document', $file);

            //
            $productHukumData = $request->except('file');
            $productHukumData['file'] = $file; 

        } else {
            $productHukumData = $request->all();
            
        }

        if (isset($productHukumData['deskripsi'])) {
            $productHukumData['deskripsi'] = \Illuminate\Support\Str::title($productHukumData['deskripsi']);
        }
        if (isset($productHukumData['judul'])) {
            $productHukumData['judul'] = \Illuminate\Support\Str::title($productHukumData['judul']);
        }

        
        $peraturans = Peraturan::query()->create($productHukumData);
        $peraturans->tagPeraturans()->sync($request->input('subjek'));

        return redirect()->route('index.peraturan')->with('message', 'Add Peraturan Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, Peraturan $peraturans)
    {
        $product = $peraturans->query()->find($id);
        if (! $product) {
            return back()->withErrors(['error' => 'Product Hukum not found.']);
        }
        $categoryHukums = Kategori::query()->get();
        $tagPeraturans = Tag::query()->get();
        $peraturans = Peraturan::query()->get();
        $tahuns = Tahun::query()->get();
        if (auth()->user()->role == 'admin') {
            $sumbers = User::query()->get();
        } else {
            $sumbers = User::query()->where('id', auth()->id())->first();

        }

        return response()->view('pages.admin.peraturan.update_peraturan', [
            'peraturans' => $peraturans,
            'tags' => $tagPeraturans,
            'kategoris' => $categoryHukums,
            'product_hukum' => $product,
            'tahuns' => $tahuns,
            'sumbers' => $sumbers,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, string $slug, UpdatePeraturanRequest $request)
    {
        // dd($request);
        $newSlug = $request->input('slug') ?: \Illuminate\Support\Str::slug($request->input('nama'), '-');

        if ($request->file('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            if ($extension !== 'pdf') {
                return back()->withErrors(['file' => 'Only PDF files are allowed.']);
            }
            $randomString = \Illuminate\Support\Str::random(10);
            $file = $newSlug.'-'.now()->timestamp.'-'.$randomString.'.'.$extension;
            // memasukan datanya kedalam direktori tanpa prefix public
            $request->file('file')->storeAs('document', $file);
        }

        $peraturans = Peraturan::query()->where('id', $id)->where('slug', $slug)->first();
        if (! $peraturans) {
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
        if ($request->input('subjek')) {
            $peraturans->tagPeraturans()->sync($request->input('subjek'));
        }

        return redirect()->route('index.peraturan')->with('message', 'Update Peraturan Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peraturans = Peraturan::query()->find($id);
        $peraturans->delete();
        $peraturans->save();

        return response()->redirectToRoute('index.peraturan')->with('message', 'Destroy Peraturan Successfully');
    }

    public function viewDelete()
    {
        $peraturans = Peraturan::onlyTrashed()->get();

        return response()->view('pages.admin.peraturan.view_delete_peraturan', [
            'peraturans' => $peraturans,
        ]);
    }

    public function restore(string $id): RedirectResponse
    {
        $peraturans = Peraturan::withTrashed()->find($id);
        $peraturans->restore();

        return response()->redirectToRoute('index.peraturan')->with('message', 'Restore Peraturan Successfully');
    }
}
