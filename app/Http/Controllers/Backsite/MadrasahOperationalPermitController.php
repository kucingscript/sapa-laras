<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\MadrasahOperationalPermit;
use Illuminate\Http\Request;

class MadrasahOperationalPermitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MadrasahOperationalPermit::paginate(1);
        return view('pages.backsite.madrasah-operational-permit.index', \compact('data'));
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
    public function edit(MadrasahOperationalPermit $madrasahOperationalPermit)
    {
        return view('pages.backsite.madrasah-operational-permit.edit', compact('madrasahOperationalPermit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MadrasahOperationalPermit $madrasahOperationalPermit)
    {
        $request->validate([
            'requirements' => 'required|array|min:1',
            'requirements.*' => 'required|string|max:255',
        ]);

        $requirementsArray = array_filter($request->input('requirements'));

        if (empty($requirementsArray)) {
            return back()->withErrors(['requirements' => 'Minimal harus ada satu persyaratan yang diisi.'])->withInput();
        }

        $madrasahOperationalPermit->update([
            'data' => $requirementsArray,
        ]);

        try {
            $madrasahOperationalPermit->update([
                'data' => $requirementsArray,
            ]);

            return redirect()->route('backsite.madrasah-operational-permit.index')->with('alert', [
                'type' => 'success',
                'title' => 'Berhasil',
                'message' => 'Data persyaratan berhasil diperbarui.'
            ]);
        } catch (Exception $e) {
            return back()->withInput()->with('alert', [
                'type' => 'error',
                'title' => 'Gagal',
                'message' => 'Terjadi kesalahan saat memperbarui data. Silakan coba lagi.'
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
