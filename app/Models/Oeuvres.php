<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oeuvres extends Model
{
    protected $fillable = [
        'titre',
        'artiste',
        'categorie_id',
        'année_de_fabrication',
        'date_d_acquisition',
        'prix_estimé',
        'description',
        'photo'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
