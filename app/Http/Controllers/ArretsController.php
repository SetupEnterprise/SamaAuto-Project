<?php

namespace App\Http\Controllers;

use App\models\Arret;
use App\models\Trajet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArretsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Jointure
        $listeArret = DB::table('arrets')
            ->join('trajets','trajets.trajets_id','=','arrets.trajets_id')
            ->get();
        return view('gerant.arret.lister-arret', compact('listeArret'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listeTrajet = Trajet::all();
        return view('gerant.arret.ajouter-arret', compact('listeTrajet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'trajet' => 'required',
            'nom_arret' => 'required | min:3 | string',
            'region' => 'required | min:4 | string'
        ]);

        /* Vérification si l'utilisateur à sélectionner un trajet */
        if ($request->trajet == "null") {
            session()->flash('messageTrajetNull','Veuillez sélectionner un trajet');
            return back();
        }

        //Insertion dans la base de données
        $ajoutArret = new Arret;
        $ajoutArret->trajets_id = $request->trajet;
        $ajoutArret->nom_arret = $request->nom_arret;
        $ajoutArret->region = $request->region;
        $ajoutArret->localisation = $request->localisation;
        $ajoutArret->save();

        session()->flash('messageArretAjouter',"L'arret ".$request->nom_arret." enregistré avec succes");
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
        $listeArret = DB::table('arrets')
            ->join('trajets','trajets.trajets_id','=','arrets.trajets_id')
            ->where('trajets.trajets_id',$id)
            ->get();
        $trajet = DB::table('trajets')
            ->select('point_depart','point_arrivee')
            ->get()
            ->first();
        return view('gerant.arret.voir-info-arret', compact('listeArret','trajet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = 1;
        return view('gerant.arret.voir-arret', compact('id'));
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
