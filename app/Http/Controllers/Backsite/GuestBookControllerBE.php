<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\GuestBook;
use Illuminate\Http\Request;

class GuestBookControllerBE extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guestBooks = GuestBook::latest()->paginate(10);
        return view('pages.backsite.guest-book.index', compact('guestBooks'));
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
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'instansi' => 'required|string|max:255',
            'keperluan' => 'required|string|max:255',
            'deskripsi_keperluan' => 'required|string',
            'nomor_hp' => 'required|numeric|digits_between:10,15',
            'pic' => 'required|string|max:255',
            'kritik' => 'required|string',
            'rating' => 'required|string',
        ]);

        GuestBook::create($validated);
        return back()->with('success', 'Terima kasih atas kritik dan saran Anda.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuestBook $guestBook)
    {
        $guestBook->delete();
        return back()->with('alert', [
            'type' => 'success',
            'title' => 'Berhasil',
            'message' => 'Data berhasil dihapus.'
        ]);
    }
}
