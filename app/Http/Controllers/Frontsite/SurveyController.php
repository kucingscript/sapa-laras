<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        return view('pages.frontsite.survey.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
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
            'penilaian_16' => 'required|numeric|min:1|max:5',
            'penilaian_17' => 'required|numeric|min:1|max:5',
            'penilaian_18' => 'required|numeric|min:1|max:5',
            'penilaian_19' => 'required|numeric|min:1|max:5',
            'penilaian_20' => 'required|numeric|min:1|max:5',
            'kritik' => 'required|string',
        ]);

        Survey::create($validated);
        return back()->with('success', 'Terima kasih atas penilaian Anda.');
    }

    public function result()
    {
        $surveys = Survey::latest()->get();
        $totalRespondents = $surveys->count();
        $overallAverage = 0;
        $totalScoreSum = 0;
        $questionCount = 20;

        if ($totalRespondents > 0) {
            foreach ($surveys as $survey) {
                $individualTotal = 0;
                for ($i = 1; $i <= $questionCount; $i++) {
                    $individualTotal += $survey->{'penilaian_' . $i};
                }
                $totalScoreSum += $individualTotal;
            }
            $overallAverage = $totalScoreSum / ($totalRespondents * $questionCount);
        }

        return view('pages.frontsite.survey.result', compact('surveys', 'totalRespondents', 'overallAverage'));
    }
}
