<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\models\Control;
use App\models\Trajet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Vehicule;
use App\models\VehiculeTrajet;

class VoyagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Jointure
        $listeVoyage = DB::table('vehicule_trajets')
            ->join('trajets','trajets.trajets_id','=','vehicule_trajets.trajets_id')
            ->join('vehicules','vehicules.vehicules_id','=','vehicule_trajets.vehicules_id')
            ->get();

        return view('gerant.voyage.lister-voyage', compact('listeVoyage'));
    }

    public function action(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('vehicules')
                        ->select('categorie')
                        ->join('categories','categories.categories_id','=','vehicules.categories_id')
                        ->where('categorie', 'like', '%'.$query.'%')
                        ->get();
            } else {
                $data = DB::table('vehicules')
                        ->orderBy('vehicules_id', 'desc')
                        ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {

            } else {
                $output = '
                <span> Aucun résultat</span>';
            }
            echo json_encode($data);


        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gerant.voyage.creer-voyage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->date_voyage->format('d-m-Y'));
        $this->validate($request, [
            'matricule' => 'required | string | min:5 | max:20 ',
            'ville_de_depart' => 'required | string | min:4 | max:20 ',
            'ville_de_destination' => 'required | string | min:4 | max:20 ',
            'date_voyage' => 'required|date|after:yesterday',
            'heure_de_depart' => 'required '
        ]);

        $ville_de_depart = ucfirst(strtolower($request->ville_de_depart));
        $ville_de_destination = ucfirst(strtolower($request->ville_de_destination));

        /* Vérication ville départ != ville destination */
        if ($ville_de_depart == $ville_de_destination) {
            session()->flash('messageVilleEgale',"La ville de départ ne peut être la même chose que la ville de destionation ");
            return back();
        }

        /* Vérification du matricule */
            # code...
        if (Vehicule::where('matricule',$request->matricule)->count() <= 0) {
            session()->flash('messageMatriculeNoExiste',"Aucun véhicule de cette matricule ".$request->matricule."
            n'existe enregistré");
            return back();
        }else{
            $vehicules_id = DB::table('vehicules')
                            ->select('vehicules_id')
                            ->where('matricule', $request->matricule)
                            ->get();
        }

        /* Rechercher si le trajet est déja enregistrer dans la base */
        if(DB::table('trajets')
                ->where('point_depart','=',$ville_de_depart)
                ->where('point_arrivee', '=',$ville_de_destination)
                ->count() == 0)
        {
            session()->flash('messageTrajetNoExiste',"Le trajet ".$request->ville_de_depart." - ".$request->ville_de_destination." n'existe pas");
            return back();
        }else {
            $trajets_id = DB::table('trajets')
                    ->select('trajets_id')
                    ->where('point_depart','=',$ville_de_depart)
                    ->where('point_arrivee', '=',$ville_de_destination)
                    ->get();
        }

        //dd($trajets_id->first()." et ".$vehicules_id);
        foreach ($trajets_id as $t ) {
            $trajet = $t->trajets_id;
        }
        foreach ($vehicules_id as $v ) {
            $vehicule = $v->vehicules_id;
        }

        //Insertion dans la base de données
        $ajoutVehiculeTrajet = new VehiculeTrajet;
        $ajoutVehiculeTrajet->vehicules_id = $vehicule;
        $ajoutVehiculeTrajet->trajets_id = $trajet;
        $ajoutVehiculeTrajet->date_voyage = $request->date_voyage;
        $ajoutVehiculeTrajet->heure_de_depart = $request->heure_de_depart;
        $ajoutVehiculeTrajet->save();

        //Redirection
        session()->flash('messageVoyageCreate',"Le voyage ".$ville_de_depart." - ".$ville_de_destination."
        pour le véhicule ".$request->matricule." est créé avec succes");
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
        $voirVoyage = DB::table('vehicule_trajets')
            ->join('trajets','trajets.trajets_id','=','vehicule_trajets.trajets_id')
            ->join('vehicules','vehicules.vehicules_id','=','vehicule_trajets.vehicules_id')
            ->where('vehicule_trajet_id','=',$id)
            ->get();

        foreach ($voirVoyage as $vv ) {
            $vehicules_id = $vv->vehicules_id;
        }
        $control = new Control;
        $infoCategorie = $control->infoVehiculesFromVoyage($vehicules_id);
        return view('gerant.voyage.voir-voyage', compact('voirVoyage', 'infoCategorie'));
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
