<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAbstrakHukumRequest;
use App\Http\Requests\UpdateAbstrakHukumRequest;
use App\Models\Abstrak;
use App\Models\Peraturan;
use Illuminate\Http\Response;

class AbstrakController extends Controller
{
    public function index(): Response
    {
        $peraturans = auth()->user()->role == 'admin' ? Peraturan::query()->get() : Peraturan::where('user_id', auth()->id())->get();

        return response()->view('pages.admin.abstrak.abstrak', [
            'peraturans' => $peraturans,
        ]);
    }

    public function store(StoreAbstrakHukumRequest $request)
    {
        try {
            $validated = $request->validated();
            Abstrak::create($request->all());

            return redirect()->route('index.abstrak')->with('message', 'Create abstrak peraturan successful');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function update(string $id, UpdateAbstrakHukumRequest $request)
    {
        $request->validated();
        $abstrak = Abstrak::query()->find($id);
        $abstrak->update($request->all());

        return redirect()->route('index.abstrak')->with('message', 'Update abstrak successful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $abstrak = Abstrak::query()->find($id);
        $abstrak->delete();

        return redirect()->route('index.abstrak')->with('message', 'Delete abstrak successful');
    }
}
