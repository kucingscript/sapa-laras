<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\MadinOperationalPermit;
use Illuminate\Http\Request;

class MadinOperationalPermitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MadinOperationalPermit::paginate(1);
        return view('pages.backsite.madin-operational-permit.index', compact('data'));
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
    public function edit(MadinOperationalPermit $madinOperationalPermit)
    {
        return view('pages.backsite.madin-operational-permit.edit', compact('madinOperationalPermit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MadinOperationalPermit $madinOperationalPermit)
    {
        $request->validate([
            'data'   => 'required|array|min:1',
            'data.*' => 'required|string|max:255',
            'supporting_data'   => 'required|array|min:1',
            'supporting_data.*' => 'required|string|max:255',
        ]);

        $dataArray = array_filter($request->input('data'));
        $data2Array = array_filter($request->input('supporting_data'));

        try {
            $madinOperationalPermit->update([
                'data' => $dataArray,
                'supporting_data' => $data2Array,
            ]);

            return redirect()->route('backsite.madin-operational-permit.index')->with('alert', [
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
