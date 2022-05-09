<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Praticien;

class PraticienController extends Controller
{
   
    public function searchP()
    {
        $q = request()->input('q');
        // dd($q);

        $searchPraticien = Praticien::where('PRA_NOM', 'like', "$q%")
        ->get();

        return view('praticien')->with('praticiens', $searchPraticien);
    }
}
