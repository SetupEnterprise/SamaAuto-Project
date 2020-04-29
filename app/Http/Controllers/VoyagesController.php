<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\models\Trajet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Vehicule;

class VoyagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        dd($request->date_voyage);
        $this->validate($request, [
            'matricule' => 'required | string | min:5 | max:20 ',
            'ville_de_depart' => 'required | string | min:4 | max:20 ',
            'ville_de_destination' => 'required | string | min:4 | max:20 ',
            'date_voyage' => 'required|date|after:yesterday'
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
        }

        /* Rechercher si le trajet est déja enregistrer dans la base */
        if(DB::table('trajets')
                ->where('point_depart','=',$ville_de_depart)
                ->where('point_arrivee', '=',$ville_de_destination)
                ->count() == 0)
        {
            session()->flash('messageTrajetNoExiste',"Le trajet ".$request->ville_de_depart." - ".$request->ville_de_destination." n'existe pas");
            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
