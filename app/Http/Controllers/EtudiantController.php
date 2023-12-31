<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::orderby('nom','asc')->paginate(10);
        return view('etudiant',compact("etudiants"));
    }

    public function create()
    {
        $classes = Classe::all();
        return view('createEtudiant',compact("classes"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "classe_id"=>"required"
        ]);
    }
}
