<?php

namespace App\models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\models\Categorie;
use App\models\Vehicule;

class Control extends Model
{
    public function recup_date_time_now()
    {
        return date('Y-m-d H:i:s');
    }
    public function verif_ville_egal($ville_depart, $ville_arrivee)
    {
        if ($ville_depart == $ville_arrivee) {
            session()->flash('messageVilleEgale',"La ville de départ ne peut être la même chose que la ville de destination ");
            return back();
        }
    }
    public function convention_primary_key_string($request)
    {
        return ucfirst(strtolower($request));

    }
    public function verif_si_nombre_est_negatif($request)
    {
        if ($request <= 0) {
            session()->flash('messageCategorieNegatif',"Le nombre de places du catégorie de véhicule ne peut être négatif ou null");
            return back();
        }

    }

    public function mettre_en_majuscule($request)
    {
        return strtoupper($request);
    }
    public function infoVehiculesFromVoyage($id)
    {
        $voirVehicule = Vehicule::where('vehicules_id',$id)->firstOrFail();
        $voirCategorie = Categorie::where('categories_id', $voirVehicule->categories_id)->firstOrFail();
        return $voirCategorie;

    }
    public function infoVehicules($id, $requete)
    {
        $voirVehicule = Vehicule::where('vehicules_id',$id)->firstOrFail();
        $voirCategorie = Categorie::where('categories_id', $voirVehicule->categories_id)->firstOrFail();
        if ($requete == "show") {
            return view('gerant.vehicule.voir-info-vehicule',[
            'voirVehicule' => $voirVehicule,
            'voirCategorie' => $voirCategorie,
        ]);
        } else {
            $allCategories = $this->listerLesCategories();
            return view('gerant.vehicule.voir-vehicule',[
            'voirVehicule' => $voirVehicule,
            'voirCategorie' => $voirCategorie,
            'allCategories' => $allCategories,
            ]);
        }
    }

    public function modifierUnVehicule($id, $requete)
    {
        //Fonction Split avec Laravel
        $listeId = explode(' ', $id, 2);
        $vehicules_id = $listeId[0];
        $categorie_id = $listeId[1];
        return $this->infoVehicules($vehicules_id, $requete);


    }

    public function listerLesCategories()
    {
        $categorie = Categorie::all();
        return $categorie;
    }

}
