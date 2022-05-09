<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get('/', function () {
    return view('auth.login');
});*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    /*Route::get('/visiteur',function () {
    return view('visiteur');
})->name('visiteur');*/


    Route::get('/visiteur', function () {
        $visiteurs = App\Models\Visiteur::all();
        return view('visiteur', [
            'visiteurs' => $visiteurs
        ]);
    })->name('visiteur');

    Route::get('/searchVisiteur', [App\Http\Controllers\VisiteurController::class, 'search'])->name('research');

    /**-------------------------------------------------------------------------------------------------------------------- */
    Route::get('/praticien', function () {
        $praticiens = App\Models\Praticien::all();
        return view('praticien', [
            'praticiens' => $praticiens
        ]);
    })->name('praticien');

    Route::get('/searchPraticien', [App\Http\Controllers\PraticienController::class, 'searchP'])->name('researchP');

    /**-------------------------------------------------------------------------------------------------------------------- */
    /*Route::get('/rapport', function () {
        $id = App\Models\Auth::user()->VIS_MATRICULE;
        $rapports = App\Models\Rapport::join('praticien', 'rapport_visite.PRA_NUM', '=', 'praticien.PRA_NUM')
            ->where('rapport_visite.VIS_MATRICULE', $id)
            ->get();
        return view('rapport', [
            'rapports' => $rapports
        ]);
    })->name('rapport');*/

    Route::get('/rapport',[App\Http\Controllers\RapportController::class,'liste'])->name('rapport');

    /**-------------------------------------------------------------------------------------------------------------------- */
    Route::get('/newrapport', [App\Http\Controllers\RapportController::class, 'show'])->name('show');

    Route::post('/newrapport', [App\Http\Controllers\RapportController::class, 'store'])->name('store');

    /*Route::get('/praticien', function () {
    return view('praticien');
})->middleware(['auth'])->name('praticien');*/


    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/profil', function () {
            $profils = App\Models\Profil::all();
            return view('profil', [
                'profils' => $profils
            ]);
        })->name('profil');
    });
});

require __DIR__ . '/auth.php';
