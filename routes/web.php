<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\HajjCancellationController;
use App\Http\Controllers\Backsite\HajjDelegationController;
use App\Http\Controllers\Backsite\HajjRegularRegistrationController;
use App\Http\Controllers\Backsite\IslamicArtInsitutionController;
use App\Http\Controllers\Backsite\LpqRegistrationController;
use App\Http\Controllers\Backsite\MadinOperationalPermitController;
use App\Http\Controllers\Backsite\MadrasahOperationalPermitController;
use App\Http\Controllers\Backsite\MajlisTaklimCertificateController;
use App\Http\Controllers\Backsite\MosquePermitController;
use App\Http\Controllers\Backsite\PesantrenOperationalPermitController;
use App\Http\Controllers\Backsite\SantriStudyAbroadController;
use App\Http\Controllers\Backsite\WaqfPledgeDeedController;
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\ServiceController;
use Illuminate\Support\Facades\Route;

Route::resource("/", LandingController::class);
Route::name('service.')->group(function () {
    Route::get('service/mosque-permit/{mp}', [ServiceController::class, 'showMosquePermit'])->name('mosque_permit');
});

Route::prefix('secure-admin')->name('backsite.')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('mosque-permit', MosquePermitController::class);
    Route::resource('majlis-taklim-certificate', MajlisTaklimCertificateController::class);
    Route::resource('islamic-art-institution', IslamicArtInsitutionController::class);
    Route::resource('hajj-regular-registration', HajjRegularRegistrationController::class);
    Route::resource('hajj-cancellation', HajjCancellationController::class);
    Route::resource('hajj-delegation', HajjDelegationController::class);
    Route::resource('santri-study-abroad', SantriStudyAbroadController::class);
    Route::resource('pesantren-operational-permit', PesantrenOperationalPermitController::class);
    Route::resource('madin-operational-permit', MadinOperationalPermitController::class);
    Route::resource('lpq-registration', LpqRegistrationController::class);
    Route::resource('madrasah-operational-permit', MadrasahOperationalPermitController::class);
    Route::resource('waqf-pledge-deed', WaqfPledgeDeedController::class);
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
