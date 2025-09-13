<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\HajjCancellation;
use Illuminate\Http\Request;

class HajjCancellationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = HajjCancellation::paginate(1);
        return view('pages.backsite.hajj-cancellation.index', compact('data'));
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
    public function edit(HajjCancellation $hajjCancellation)
    {
        return view('pages.backsite.hajj-cancellation.edit', compact('hajjCancellation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HajjCancellation $hajjCancellation)
    {
        $request->validate([
            'data'   => 'required|array|min:1',
            'data.*' => 'required|string|max:255',
            'data2'   => 'required|array|min:1',
            'data2.*' => 'required|string|max:255',
        ]);

        $dataArray = array_filter($request->input('data'));
        $data2Array = array_filter($request->input('data2'));

        try {
            $hajjCancellation->update([
                'data' => $dataArray,
                'data2' => $data2Array,
            ]);

            return redirect()->route('backsite.hajj-cancellation.index')->with('alert', [
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
