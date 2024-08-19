<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attack extends Model
{
    public function Pokemons()
    {
        return $this->belongsToMany(Pokemon::class, "attacks_pokemon");
    }
    
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
