<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Oeuvres;
use Illuminate\Http\Request;

class OeuvreController extends Controller
{


    public function liste()
    {
        $oeuvres = Oeuvres::all();

        return view('admin.oeuvres.liste',[
            'oeuvres' => $oeuvres
        ]);
    }

    public function ajouter()
    {
        $categories = Categorie::all();

        return view('admin.oeuvres.create',[
            'categories' => $categories
        ]);
    }



    public function ajouter_traitement(Request $request)
    {
        //dd($request->all());

        Oeuvres::create([
            'titre' => $request->titre,
            'artiste' => $request->artiste,
            'categorie_id' => $request->categorie_id,
            'année_de_fabrication' => $request->année_de_fabrication,
            'date_d_acquisition' => $request->date_d_acquisition,
            'prix_estimé' => $request->prix_estimé,
            'description' => $request->description,
            'photo' => $request->photo,
        ]);
        return redirect()->route('admin.oeuvres.liste');
    }
}
