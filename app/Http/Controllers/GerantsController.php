<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Categorie;
use App\models\Vehicule;
use App\models\Trajet;
use App\models\VehiculeTrajet;


class GerantsController extends Controller
{
    public function statistique()
    {
        $total_vehicule = Vehicule::count();
        $total_trajet = Trajet::count();
        $total_voyage = VehiculeTrajet::count();

        $data = new DataStatistiqueController();
        $dates = $data->getAllDateVoyages();
        $listeVoyage = $data->getAllInfosVoyages();
       
        return view('gerant.statistiques_gerant', compact('total_vehicule','total_trajet','total_voyage','dates', 'listeVoyage'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('gerant.accueil-gerant');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = Categorie::all();
        return view('gerant.ajouter-vehicule', compact('categorie'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
