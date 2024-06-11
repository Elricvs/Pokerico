<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function attacks()
    {
        return $this->hasMany(Attack::class);
    }
}
