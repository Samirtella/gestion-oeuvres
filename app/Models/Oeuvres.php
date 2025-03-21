<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oeuvres extends Model
{
    protected $fillable = [
        'titre',
        'artiste',
        'categorie_id',
        'année de fabrication',
        'date d’acquisition',
        'prix estimé',
        'description',
        'photo'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
