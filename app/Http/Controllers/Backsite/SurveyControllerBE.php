<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyControllerBE extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surveys = Survey::latest()->paginate(10);
        return view('pages.backsite.survey.index', compact('surveys'));
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
            'jenis_layanan' => 'required|string|max:255',
            'nama_responden' => 'required|string|max:255',
            'usia' => 'required|numeric|min:1',
            'alamat' => 'required|string',
            'nomor_hp' => 'required|numeric|digits_between:10,15',
            'pekerjaan' => 'required|string|max:255',
            'nama_petugas' => 'required|string|max:255',
            'penilaian_1' => 'required|numeric|min:1|max:5',
            'penilaian_2' => 'required|numeric|min:1|max:5',
            'penilaian_3' => 'required|numeric|min:1|max:5',
            'penilaian_4' => 'required|numeric|min:1|max:5',
            'penilaian_5' => 'required|numeric|min:1|max:5',
            'penilaian_6' => 'required|numeric|min:1|max:5',
            'penilaian_7' => 'required|numeric|min:1|max:5',
            'penilaian_8' => 'required|numeric|min:1|max:5',
            'penilaian_9' => 'required|numeric|min:1|max:5',
            'penilaian_10' => 'required|numeric|min:1|max:5',
            'penilaian_11' => 'required|numeric|min:1|max:5',
            'penilaian_12' => 'required|numeric|min:1|max:5',
            'penilaian_13' => 'required|numeric|min:1|max:5',
            'penilaian_14' => 'required|numeric|min:1|max:5',
            'penilaian_15' => 'required|numeric|min:1|max:5',
        ]);

        Survey::create($validated);
        return back()->with('success', 'Terima kasih atas penilaian Anda.');
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
    public function destroy(string $id)
    {
        //
    }
}
