<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $fillable = [
        'id',
        'appareil',
        'marque',
        'modele',
        'serie',
        'anneAcquis',
        'echelle',
        'societeContacter',
        'precision',
        'code',

    ];
}
