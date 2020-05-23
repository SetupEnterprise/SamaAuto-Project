<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $fillable = ['matricule','categories_id','image_vehicule', 'is_deleted'];
}

