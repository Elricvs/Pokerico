<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttacksPokemonSeeder extends Seeder
{
    public function run (): void
    {
        $electrofeu = Pokemon::where('name', 'Électrofeu')->first();
        $pyrovolt = Pokemon::where('name', 'Pyrovolt')->first();
        $brasiombre = Pokemon::where('name', 'Brasiombre')->first();
        $verdorn = Pokemon::where('name', 'Verdorn')->first();
        $sylvagon = Pokemon::where('name', 'Sylvagon')->first();




        $electrofeu->attacks()->sync([1, 2, 3, 6], false);

    }
}