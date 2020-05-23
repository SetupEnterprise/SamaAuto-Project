<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DataStatistiqueClient extends Controller
{
    function ajouter_vue_auth(){
        
        $fichier = getcwd(). DIRECTORY_SEPARATOR . 'compteur' ;
        $compteur = 1;
        if(file_exists($fichier)){
            $compteur = (int)file_get_contents($fichier);
            $compteur++;
           // . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'client' . DIRECTORY_SEPARATOR . 'compteurAuthClient'
        }
        file_put_contents($fichier, $compteur);


    }
    function nbre_auth(){
        $fichier = getcwd(). DIRECTORY_SEPARATOR . 'compteur' ;
        $compteur = (int)file_get_contents($fichier);

        return $compteur;
    }
}
