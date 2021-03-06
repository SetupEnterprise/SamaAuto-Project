<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Arret extends Model
{
    protected $fillable = ['arrets_id, trajets_id, region, localisation','nom_arret'];

    public function arrets()
    {
        return $this->hasMany('App\models\Trajet','trajets');
    }
}
