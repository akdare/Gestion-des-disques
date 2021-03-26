<?php

namespace App\Http\Controllers\Discs;
use App\Models\Discs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ajoutDisqueController extends Controller
{
    public function indexajout(){
        return view('backend/ajout');
    }
    
    public function store(){
        $titre=request('titre');
        $artiste=request('artiste');
        $dateSortie=request('dateSortie');
        $auteur=request('auteur');
        $compositeur=request('compositeur');
        $producteur=request('producteur');
        $genre=request('genre');
        $photo=request('photo');
        $rayon=request('rayon');
        $etagere=request('etagere');
        

        $disc=new Discs();
        $disc->titre = $titre;
        $disc->artistes = $artiste;
        $disc->dateSortie = $dateSortie;
        $disc->auteur = $auteur;
        $disc->compositeur = $compositeur;
        $disc->producteur = $producteur;
        $disc->genre = $genre;
        $disc->photo = $photo;
        $disc->rayon = $rayon;
        $disc->etagere = $etagere;
        $disc->save();
        return back();

    }
}
