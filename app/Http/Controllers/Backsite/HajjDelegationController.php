<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\HajjDelegation;
use Illuminate\Http\Request;

class HajjDelegationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = HajjDelegation::paginate(1);
        return view('pages.backsite.hajj-delegation.index', \compact('data'));
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
    public function edit(HajjDelegation $hajjDelegation)
    {
        return view('pages.backsite.hajj-delegation.edit', compact('hajjDelegation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HajjDelegation $hajjDelegation)
    {
        $request->validate([
            'meninggal_dunia'   => 'required|array|min:1',
            'meninggal_dunia.*' => 'required|string|max:255',
            'sakit_permanen'   => 'required|array|min:1',
            'sakit_permanen.*' => 'required|string|max:255',
        ]);

        $dataArray = array_filter($request->input('meninggal_dunia'));
        $data2Array = array_filter($request->input('sakit_permanen'));

        try {
            $hajjDelegation->update([
                'meninggal_dunia' => $dataArray,
                'sakit_permanen' => $data2Array,
            ]);

            return redirect()->route('backsite.hajj-delegation.index')->with('alert', [
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
