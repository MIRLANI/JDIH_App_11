<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $tags = Tag::query()->orderBy('id', 'desc')->get();

        return response()->view('pages.admin.tag.tag', [
            'tags' => $tags,
        ]);
    }

    public function store(StoreTagRequest $request)
    {
        try {
            $tag = Tag::query()->create($request->validated());
            $tag->save();

            return response()->redirectToRoute('index.tag')->with('message', 'Add Tag Peraturan Successfully');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    public function update(string $id, UpdateTagRequest $request): RedirectResponse
    {
        $tag = Tag::query()->find($id);
        $tag->nama = $request->input('nama');
        $tag->update();

        return redirect()->route('index.tag')->with('message', 'Tag Peraturan Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Tag $tag)
    {
        $data = $tag::query()->find($id);
        if ($data->peraturans()->exists()) {
            return redirect()->route('index.tag')->with('error', 'Peraturan is still in use and cannot be deleted.');
        }
        $data->delete();

        return redirect()->route('index.tag')->with('message', 'Tag Peraturan Delete Successfull');
    }
}
