<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Categorie;
use App\models\Vehicule;
use App\models\Control;
use Illuminate\Support\Facades\DB;

class VehiculesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $listeVehicule = Vehicule::all();
        return view('gerant.lister-vehicule', compact('listeVehicule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Formulaire ajouter véhicule
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
        //Récupération des données depuis le formulaire d'ajout de type de véhicule
        //Gestion des erreurs
        $this->validate($request,[
            'matricule' => 'required | min:2 |string',
            //image_vehicule à gérer apres la validation
            //'image_vehicule' => 'required | image | mimes:jpeg,png,jpg,gif,svg',
            'categories_id' => 'required ',
        ]);

        //dd($request->file('image_vehicule'));
        $matricule = strtoupper($request->matricule);                  
        //Verifier si le matricule du véhicule existe déjà
        if(Vehicule::where('matricule',$matricule)->count() >=1)
        {
            session()->flash('messageMatriculeExiste','Le matricule du véhicule '.$request->matricule.' existe déjà');
            return back();
        }
        if ($files = $request->file('image_vehicule')) {            
            // Definir le chemin du fichier
            $destinationPath = public_path('/image_vehicule/'); // upload path
            $image_vehicule = date('YmdHis') . "." . $files->getClientOriginalExtension();
            
            //Ajout dans la base de données
            $ajoutVehicule = new Vehicule;
            $ajoutVehicule->matricule = $matricule;
            $ajoutVehicule->categories_id = request('categories_id');
            $ajoutVehicule->image_vehicule = "$image_vehicule";
            $ajoutVehicule->save();

            // Upload Orginal Image                       
            $files->move($destinationPath, $image_vehicule);
            $insert['image'] = "$image_vehicule";

            return $this->index();
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
        /* new Control()->infoVehicule($id); */
        $requete = "show";
        $control = new Control;
        return $control->infoVehicules($id, $requete);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $requete = "edit";
        $control = new Control;
        return $control->modifierUnVehicule($id, $requete);
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
        //dd($id." ".$request->categorie);

        //Requete de mise à jour
        $affected = DB::table('vehicules')
                  ->where('vehicules_id', $id)
                  ->update([
                        'categories_id' => $request->categorie,
                      ]); 

        return $this->create();
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