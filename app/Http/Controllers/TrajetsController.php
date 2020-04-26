<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Control;
use App\models\Trajet;

class TrajetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listeTrajet = Trajet::all();
        return view('gerant.trajet.lister-trajet', compact('listeTrajet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gerant.trajet.ajouter-trajet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Recupération des champs et gestion des erreurs
        $this->validate($request,[
            'ville_de_depart' => 'required | min:2 |string',
            'ville_de_destination' => 'required | min:2 |string',
            'prix_du_voyage' => 'required |integer'
        ]);

        if ($request->ville_de_depart == $request->ville_de_destination) {
            session()->flash('messageTrajetEgale','La ville de départ ne peut pas etre même que la ville de destination');
            return back();
        }

        /* Rechercher si le trajet est déja enregistrer dans la base */
        if(Trajet::wherePoint_departAndPoint_arriveeAndPrix('point_depart',$request->ville_de_depart,
        'point_arrivee',$request->ville_de_destination,'prix',$request->prix_du_voyage)->count() >=1)
        {
            session()->flash('messageTrajetExiste','Le trajet existe déjà');
            return back();
        }

        /* Enregistrement dans la base */
        $ajoutTrajet = new Trajet;
        $ajoutTrajet->point_depart = $request->ville_de_depart;
        $ajoutTrajet->point_arrivee = $request->ville_de_destination;
        $ajoutTrajet->prix = $request->prix_du_voyage;
        $ajoutTrajet->save();

        session()->flash('messageTrajetAjouter','Le trajet '
        .$request->ville_de_depart.' - '.$request->ville_de_destination.' est enregistré avec succèss');
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
        return view('gerant.trajet.voir-trajet');
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
        //
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