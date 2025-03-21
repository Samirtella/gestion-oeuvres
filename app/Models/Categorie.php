<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [

        'nom',
        'description'

    ];

    public function oeuvres()
    {
        return $this->hasMany(Oeuvres::class, 'categorie_id');
    }
}

