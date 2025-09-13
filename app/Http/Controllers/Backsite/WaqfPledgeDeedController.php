<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\WaqfPledgeDeed;
use Illuminate\Http\Request;

class WaqfPledgeDeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = WaqfPledgeDeed::paginate(1);
        return view('pages.backsite.waqf-pledge-deed.index', \compact('data'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WaqfPledgeDeed $waqfPledgeDeed)
    {
        return view('pages.backsite.waqf-pledge-deed.edit', compact('waqfPledgeDeed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WaqfPledgeDeed $waqfPledgeDeed)
    {
        $validations = [];
        $columns = [
            'wakif_perseorangan',
            'wakif_organisasi',
            'wakif_badan_hukum',
            'nazhir_perseorangan',
            'nazhir_organisasi',
            'nazhir_badan_hukum',
            'tanah_diwakafkan',
            'saksi'
        ];

        foreach ($columns as $column) {
            $validations[$column] = 'required|array|min:1';
            $validations["$column.*"] = 'required|string|max:255';
        }

        $request->validate($validations);

        try {
            $updateData = [];
            foreach ($columns as $column) {
                $updateData[$column] = array_filter($request->input($column));
            }

            $waqfPledgeDeed->update($updateData);

            return redirect()->route('backsite.waqf-pledge-deed.index')->with('alert', [
                'type' => 'success',
                'title' => 'Berhasil',
                'message' => 'Data persyaratan berhasil diperbarui.'
            ]);
        } catch (Exception $e) {
            return back()->withInput()->with('alert', [
                'type' => 'error',
                'title' => 'Gagal',
                'message' => 'Terjadi kesalahan saat memperbarui data.'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
