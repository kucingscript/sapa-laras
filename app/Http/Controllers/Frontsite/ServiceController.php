<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use App\Models\HajjCancellation;
use App\Models\HajjDelegation;
use App\Models\HajjRegularRegistration;
use App\Models\IslamicArtInsitution;
use App\Models\LpqRegistration;
use App\Models\MadinOperationalPermit;
use App\Models\MadrasahOperationalPermit;
use App\Models\MajlisTaklimCertificate;
use App\Models\MosquePermit;
use App\Models\PesantrenOperationalPermit;
use App\Models\SantriStudyAbroad;
use App\Models\WaqfPledgeDeed;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function showMosquePermit(MosquePermit $mosquePermit)
    {
        return view('pages.frontsite.service.mosque_permit', compact('mosquePermit'));
    }

    public function showMajlisTaklim(MajlisTaklimCertificate $majlisTaklim)
    {
        return view('pages.frontsite.service.majlis_taklim', compact('majlisTaklim'));
    }

    public function showIslamicArt(IslamicArtInsitution $islamicArt)
    {
        return view('pages.frontsite.service.islamic_art', compact('islamicArt'));
    }

    public function showHajjRegular(HajjRegularRegistration $hajjRegular)
    {
        return view('pages.frontsite.service.hajj_regular', compact('hajjRegular'));
    }

    public function showHajjCancellation(HajjCancellation $hajjCancellation)
    {
        return view('pages.frontsite.service.hajj_cancellation', compact('hajjCancellation'));
    }

    public function showHajjDelegation(HajjDelegation $hajjDelegation)
    {
        return view('pages.frontsite.service.hajj_delegation', compact('hajjDelegation'));
    }

    public function showSantriStudyAbroad(SantriStudyAbroad $studyAbroad)
    {
        return view('pages.frontsite.service.santri_study_abroad', compact('studyAbroad'));
    }

    public function showPonpes(PesantrenOperationalPermit $ponpes)
    {
        return view('pages.frontsite.service.pesantren_operational_permit', compact('ponpes'));
    }

    public function showMadin(MadinOperationalPermit $madin)
    {
        return view('pages.frontsite.service.madin_operational_permit', compact('madin'));
    }

    public function showLpq(LpqRegistration $lpq)
    {
        return view('pages.frontsite.service.lpq_registration', compact('lpq'));
    }

    public function showMadrasah(MadrasahOperationalPermit $madrasah)
    {
        return view('pages.frontsite.service.madrasah_operational_permit', compact('madrasah'));
    }

    public function showWaqf(WaqfPledgeDeed $waqf)
    {
        return view('pages.frontsite.service.waqf_pledge_deed', compact('waqf'));
    }
}
