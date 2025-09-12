<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use App\Models\MosquePermit;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function showMosquePermit(MosquePermit $mosquePermit)
    {
        return view('pages.frontsite.service.mosque_permit', compact('mosquePermit'));
    }
}
