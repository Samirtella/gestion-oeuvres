<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Oeuvres;
use Illuminate\Http\Request;

class OeuvreController extends Controller
{
    public function liste()
    {
        $oeuvres = Oeuvres::all();
        return view('admin.oeuvres.liste');
    }
}
