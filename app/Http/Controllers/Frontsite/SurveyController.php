<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        return view('pages.frontsite.survey.index');
    }
}
