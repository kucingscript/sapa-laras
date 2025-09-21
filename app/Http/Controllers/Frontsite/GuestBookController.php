<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use App\Models\GuestBook;
use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    public function index()
    {
        return view('pages.frontsite.guest_book.index');
    }

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
}
