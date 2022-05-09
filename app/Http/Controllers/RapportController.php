<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Praticien;
use App\Models\Rapport;
use Illuminate\Support\Facades\Auth;

class RapportController extends Controller
{

    function store(Request $request){
        
        //VALIDATE RAPPORT
        $request->validate([
            'num_pra' => ['required', 'string'],
            'date' => ['required', 'date'],
            'bilan' => ['required', 'string'],
            'motif' => ['nullable', 'string'],
        ]);
        
        $lastRapport = Rapport::orderByDesc("RAP_NUM")->first();
        $rapport_visite = new Rapport();
        $rapport_visite->VIS_MATRICULE = Auth::user()->VIS_MATRICULE;
        $rapport_visite->RAP_NUM = $lastRapport->RAP_NUM + 1;
        $rapport_visite->PRA_NUM = $request->num_pra;
        $rapport_visite->RAP_DATE = $request->date;
        $rapport_visite->RAP_BILAN = $request->bilan;
        $rapport_visite->RAP_MOTIF = $request->motif;
        $rapport_visite->save();

        // FLASH
        session()->flash('success', 'Rapport ajouté avec succès');

        return redirect('/rapport');
    }

    function show(){
        $praticien = Praticien::all();
        return view('newrapport')->with('praticiens', $praticien);
    }
    
    function liste(){
        $id = Auth::user()->VIS_MATRICULE;
        $rapports = Rapport::join('praticien', 'rapport_visite.PRA_NUM', '=', 'praticien.PRA_NUM')
            ->where('rapport_visite.VIS_MATRICULE', $id)
            ->get();
        return view("rapport", ["rapports" => $rapports]);
    }
}
