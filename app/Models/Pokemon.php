<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    public function type1()
    {
        return $this->belongsTo(Type::class, "type1_id");
    }

    public function type2()
    {
        return $this->belongsTo(Type::class, "type2_id");
    }

    public function attack1()
    {
        return $this->belongsTo(attack::class, "attack1_id");
    }

    public function attack2()
    {
        return $this->belongsTo(attack::class, "attack2_id");
    }

    public function attack3()
    {
        return $this->belongsTo(attack::class, "attack3_id");
    }

    public function attack4()
    {
        return $this->belongsTo(attack::class, "attack4_id");
    }

}
