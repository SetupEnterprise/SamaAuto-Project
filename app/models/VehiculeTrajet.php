<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class VehiculeTrajet extends Model
{
    protected $fillable = ['vehicule_trajet_id','vehicules_id','trajets_id','date_voyage','heure_de_depart'];
}
