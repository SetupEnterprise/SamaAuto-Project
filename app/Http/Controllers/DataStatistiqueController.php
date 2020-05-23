<?php

namespace App\Http\Controllers;

use App\Billet;
use App\models\VehiculeTrajet;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Validation\Rules\Exists;
use PhpParser\Node\Stmt\Foreach_;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\DB;


class DataStatistiqueController extends Controller
{

    /* Ceux-ci sont les calculs de statistique pour le gerant */
    
    function getMois() {
        $mois = [];
        $i = 0;
        $voyages_date= VehiculeTrajet::orderBy('date_voyage', 'ASC')->get('date_voyage');
        if($voyages_date){
            foreach ($voyages_date as $dateNF) {
                //$date = new DateTime($dateNF->date);
                $month_no = (new DateTime($dateNF->date_voyage))->format('m');
                $month_name = (new DateTime($dateNF->date_voyage))->format('M');
                $mois[$month_no] = $month_name;
                $i = $i+1;
            }
        }

        return $mois;
        
    }

    function getDonneesVoyagesMensuelsCount( $mois ){
        
            $moisCount = VehiculeTrajet::whereMonth('date_voyage', $mois)->count();
            
        return $moisCount;
    }
    
    function getDonneesVoyagesMensuels(){

        $mois = $this->getMois();
        $mois_count_array = [];
        $month_name_array = [];
        if(!empty($mois)){
            foreach ($mois as $month_no => $month_name) {
                $mois_count = $this->getDonneesVoyagesMensuelsCount($month_no);
                array_push($mois_count_array, $mois_count);
                array_push($month_name_array, $month_name);
            }
        }
        $max_nb = collect($mois_count_array)->max();
        $mx= round( ( $max_nb + 10/2 ) / 10 ) * 10;
        $voyages_mensuels_tab = [
            'mois' => $month_name_array,
            'nb_voyages_mensuels' => $mois_count_array,
            'max' => $mx
        ];
        return $voyages_mensuels_tab;

    }

    function getAllDateVoyages(){
        $datesVoyages = VehiculeTrajet::orderBy('date_voyage', 'DESC')->groupBy('date_voyage')->get('date_voyage');
        return $datesVoyages;
    }


    function getAllInfosVoyages(){
      //  $dates = $this->getAllDateVoyages();

       /* if($dates){
            $infosVoyages = VehiculeTrajet::;
        }*/
        $listeVoyage = DB::table('vehicule_trajets')
        ->join('trajets','trajets.trajets_id','=','vehicule_trajets.trajets_id')
        ->join('vehicules','vehicules.vehicules_id','=','vehicule_trajets.vehicules_id')
        ->join('categories','categories.categories_id', '=', 'vehicules.categories_id')
        ->get();
         return $listeVoyage;
    }


    /* FIN de statistique pour le gerant */

    /* Ceux-ci sont les statistique pour l'administrateur*/
    function getMoisBillet() {
        $mois = [];
        $i = 0;
        $billet_date= Billet::orderBy('created_at', 'ASC')->get('created_at');
        if($billet_date){
            foreach ($billet_date as $dateNF) {
                //$date = new DateTime($dateNF->date);
                $month_no = (new DateTime($dateNF->created_at))->format('m');
                $month_name = (new DateTime($dateNF->created_at))->format('M');
                $mois[$month_no] = $month_name;
                $i = $i+1;
            }
        }

        return $mois;
        
    }

    function getNbBilletVendus( $mois){
        
        $moisCount = Billet::whereMonth('created_at', $mois)->where('etat', 'vendu')->count();
            
        return $moisCount;
    }
    function getNbBilletReportes( $mois){
        
        $moisCount = Billet::whereMonth('created_at', $mois)->where('etat', 'reporte')->count();
            
        return $moisCount;
    }

    function getDonneesBilletVendu(){
        $mois = $this->getMoisBillet();
        $mois_count_billet_array = [];
        $month_name_array = [];
        if(!empty($mois)){
            foreach ($mois as $month_no => $month_name) {
                $mois_count = $this->getNbBilletVendus($month_no);
                if($mois_count != 0){
                array_push($mois_count_billet_array, $mois_count);
                array_push($month_name_array, $month_name);
                }
            }
        }
        $max_nb = collect($mois_count_billet_array)->max();
        $mx= round( ( $max_nb + 10/2 ) / 10 ) * 10;
        $voyages_mensuels_tab = [
            'mois' => $month_name_array,
            'nb_billet_mensuels_vendu' => $mois_count_billet_array,
            'max' => $mx
        ];
        return $voyages_mensuels_tab;
    }

    function getDonneesBilletReporte(){
        $mois = $this->getMoisBillet();
        $mois_count_billet_array = [];
        $month_name_array = [];
        if(!empty($mois)){
            foreach ($mois as $month_no => $month_name) {
                $mois_count = $this->getNbBilletReportes($month_no);
                if($mois_count != 0){
                array_push($mois_count_billet_array, $mois_count);
                array_push($month_name_array, $month_name);
                }
            }
        }
        $max_nb = collect($mois_count_billet_array)->max();
        $mx= round( ( $max_nb + 10/2 ) / 10 ) * 10;
        $voyages_mensuels_tab = [
            'mois' => $month_name_array,
            'nb_billet_mensuels_reportes' => $mois_count_billet_array,
            'max' => $mx
        ];
        return $voyages_mensuels_tab;
    }
        

    function getDonneesBilletVendeur(){

        $vendeurs = DB::table('billets')
        ->join('vendeurs','billets.vendeurs_id','=','vendeurs.vendeurs_id')
        ->join('users','users.users_id','=','vendeurs.users_id')
        ->select('billets.*', 'users.nom', 'users.prenom')
        ->get();
         
         return $vendeurs;
    }
    function getNbBilletVendeur($id){
        $count = Billet::where('vendeurs_id', $id)
                        //->whereMonth('created_at', $mois )
                        ->count();
        return $count;

    }
    function getBilletVendeur(){
        $compt = 0;
        $billets = $this->getDonneesBilletVendeur();
        $vendeurs = [];
        $name = '';
        $id_tab = [];
        foreach($billets as $billet){
            $name = $billet->prenom.' '.$billet->nom;
            foreach($vendeurs as $vendeur){
                if($name == $vendeur){
                    $compt = 1;
                    break;
                }
            }
            if($compt == 0){
                array_push($vendeurs, $name);
                array_push($id_tab, $billet->vendeurs_id);
            }
        }
        $count = 0;
        $count_tab = [];
        foreach($id_tab as $id){
            $count = $this->getNbBilletVendeur($id);
            array_push($count_tab, $count);
        }
        

        $max_nb = collect($count_tab)->max();
        $mx= round( ( $max_nb + 10/2 ) / 10 ) * 10;

        $data_vendeur_array = [
            'vendeurs' => $vendeurs,
            'nb_billets' => $count_tab,
            'max' => $mx 
        ];

        return $data_vendeur_array;

    }
    /* FIN de Statistique pour l'administrateur*/

}
