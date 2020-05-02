<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Categorie;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listeCategorie = Categorie::all();
        return view('gerant.categorie.lister-categorie', compact('listeCategorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Formulaire ajouter catégorie véhicule
        return view('gerant.categorie.ajouter-type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Récupération des données depuis le formulaire d'ajout de type de véhicule
        //Gestion des erreurs
        $this->validate($request,[
            'categorie' => 'required | min:2 |string',
            'nombre_de_places' => 'required | integer',
        ]);
        $categorie = ucfirst(strtolower($request->categorie));

        //Verifier si la catégorie de véhicule existe déjà
        if(Categorie::where('categorie',$categorie)->count() >=1)
        {
            session()->flash('messageCategorieExiste','La catégorie de véhicule '.$request->categorie.' existe déjà');
            return back();
        }

        //Insertion dans la base de données
        $ajoutCategorie = new Categorie;
        $ajoutCategorie->categorie = $categorie;
        $ajoutCategorie->nbre_place = $request->nombre_de_places;
        $ajoutCategorie->save();

        session()->flash('messageCategorieEnregistrer','La catégorie de véhicule '.$categorie.' est enregistrée avec succès');
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voirCategorie = Categorie::where('categories_id',$id)->firstOrFail();
        return view('gerant.voir-categorie', compact('voirCategorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->index();
        /* //Gestion des erreurs
        $this->validate($request,[
            'categorie' => 'required | min:2 |string',
            'nbre_place' => 'required | integer',
        ]);
        $categorie = ucfirst(strtolower($request->categorie));

        //Verifier si la catégorie de véhicule existe déjà
        if(Categorie::where('categorie',$categorie)->count() >=1)
        {
            session()->flash('messageCategorieExiste','La catégorie de véhicule '.$request->categorie.' existe déjà');
            return back();
        }

        //Mise à jour de la catégorie de véhicule
        $affected = DB::table('categories')
                  ->where('categories_id', $id)
                  ->update([
                        'categorie' => $request->categorie,
                        'nbre_place' => $request->nbre_place,
                      ]);

        return $this->index(); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
