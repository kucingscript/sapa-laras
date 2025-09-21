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
