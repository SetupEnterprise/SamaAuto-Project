<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Categorie;
use App\models\Vehicule;

class VehiculesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //Formulaire ajouter véhicule
        $categorie = Categorie::all();        
        return view('gerant.ajouter-vehicule', compact('categorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

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
            'matricule' => 'required | min:2 |string',
            //image_vehicule à gérer apres la validation
            //'image_vehicule' => 'required | image | mimes:jpeg,png,jpg,gif,svg',
            'categories_id' => 'required ',
        ]);

        //dd($request->file('image_vehicule'));
        if ($files = $request->file('image_vehicule')) {            
            // Definir le chemin du fichier
            $destinationPath = public_path('/image_vehicule/'); // upload path
            // Upload Orginal Image           
            $image_vehicule = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $image_vehicule);
            $insert['image'] = "$image_vehicule";

            //Ajout dans la base de données
            $ajoutVehicule = new Vehicule;
            $ajoutVehicule->matricule = request('matricule');
            $ajoutVehicule->categories_id = request('categories_id');
            $ajoutVehicule->image_vehicule = "$image_vehicule";
            $ajoutVehicule->save();

            return redirect()->route('gerant.index');
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
