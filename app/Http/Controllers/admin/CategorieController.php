<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;

class CategorieController extends Controller
{
    public function liste()
    {
        $categories = Categorie::all();

        return view('admin.categories.liste',[
            'categories' => $categories
        ]);
    }

    public function ajouter(){

        $categories = Categorie::all();
        return view('admin.categories.create', [

            'categories' => $categories
        ]);
    }

    public function ajouter_traitement(Request $request)
    {
        //dd($request->all());

        Categorie::create([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.categories.liste');
    }
}
