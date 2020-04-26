<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    protected $fillable = ['trajets_id','point_depart','point_arrivee','prix'];

    public function arrets()
    {
        return $this->hasMany(Arret::class);
    }
}
