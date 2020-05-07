<?php

namespace App\Http\Controllers;

use App\models\Arret;
use App\models\Control;
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

        if(DB::table('arrets')
            ->where('trajets_id','=',$request->trajet)
            ->where('nom_arret', '=', $request->nom_arret)
            ->where('region', '=', $request->region)
            ->count() ==1)
        {
            session()->flash('messageArretExiste',"L'arrêt ".$request->nom_arret." existe déjà");
            return back();
        }

        //Insertion dans la base de données
        $ajoutArret = new Arret;
        $ajoutArret->trajets_id = $request->trajet;
        $ajoutArret->nom_arret = $request->nom_arret;
        $ajoutArret->region = $request->region;
        $ajoutArret->localisation = $request->localisation;
        $ajoutArret->save();

        session()->flash('messageArretAjouter',"L'arret ".$request->nom_arret." enregistré avec succès");
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
        $control = new Control;
        $listeArret = $control->voirUnArret($id);
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
        $control = new Control;
        $listerUnArret = $control->voirUnArret($id);
        $infoTrajet = $control->recupererTrajet($listerUnArret->trajets_id);
        return view('gerant.arret.voir-arret', compact('listerUnArret','infoTrajet'));
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
        $control = new Control;
        $this->validate($request,[
            'nom_arret' => 'required | min:3 | string',
            'region' => 'required | min:4 | string'
        ]);
        if (DB::table('arrets')
                ->where('nom_arret', $request->nom_arret)
                ->count() == 1) {
            session()->flash('messageArretExiste',"L'arrêt ".$request->nom_arret." existe déjà");
            return back();
        } else {
            $updated_at = $control->recup_date_time_now();

                DB::table('arrets')
                        ->where('arrets_id', $id)
                        ->update([
                            'nom_arret' => $request->nom_arret,
                            'region' => $request->region,
                            'localisation' => $request->localisation,
                            'updated_at' => $updated_at,
                        ]);
            session()->flash('messageArretModifier',"L'arrêt ".$request->nom_arret." est modifié avec succès");
            return $this->index();
        }

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
