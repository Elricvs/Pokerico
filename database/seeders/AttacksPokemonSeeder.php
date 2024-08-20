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
        $Feuillagon = Pokemon::where('name', 'Feuillagon')->first();
        $Maréspion = Pokemon::where('name', 'Maréspion')->first();
        $Mindwave = Pokemon::where('name', 'Mindwave')->first();
        $Aqualith = Pokemon::where('name', 'Aqualith')->first();
        $Armurion = Pokemon::where('name', 'Armurion')->first();
        $Metaknight = Pokemon::where('name', 'Metaknight')->first();
        $Frostine = Pokemon::where('name', 'Frostine')->first();
        $Cryolynx = Pokemon::where('name', 'Cryolynx')->first();
        $Massrold = Pokemon::where('name', 'Massrold')->first();
        $Venapic = Pokemon::where('name', 'Venapic')->first();
        $Venombee = Pokemon::where('name', 'Venombee')->first();
        $Pastelail = Pokemon::where('name', 'Pastelail')->first();
        $Plumélia = Pokemon::where('name', 'Plumélia')->first();
        $Alcyora = Pokemon::where('name', 'Alcyora')->first();
        $Fluffurnis = Pokemon::where('name', 'Fluffurnis')->first();
        $Lumifluff = Pokemon::where('name', 'Lumifluff')->first();
        $Obscurion = Pokemon::where('name', 'Obscurion')->first();
        $Celestiel = Pokemon::where('name', 'Celestiel')->first();
        $Terraklysm = Pokemon::where('name', 'Terraklysm')->first();


        $electrofeu->attacks()->sync([1, 2, 3, 6], false);
        $pyrovolt->attacks()->sync([3, 4, 5, 6], false);
        $brasiombre->attacks()->sync([3, 4, 5, 6], false);
        $verdorn->attacks()->sync([1, 2, 7, 9], false);
        $sylvagon->attacks()->sync([7, 8, 9, 10], false);
        $Feuillagon->attacks()->sync([7, 8, 9, 10], false);
        $Maréspion->attacks()->sync([1, 2, 12, 13], false);
        $Mindwave->attacks()->sync([11, 12, 13, 14], false);
        $Aqualith->attacks()->sync([11, 12, 13, 14], false);
        $Armurion->attacks()->sync([27, 24, 25, 23], false);
        $Metaknight->attacks()->sync([23, 24, 25, 26], false);
        $Frostine->attacks()->sync([30, 28, 31, 32], false);
        $Cryolynx->attacks()->sync([28, 29, 31, 32], false);
        $Massrold->attacks()->sync([33, 34, 35, 36], false);
        $Venapic->attacks()->sync([38, 39, 40, 41], false);
        $Venombee->attacks()->sync([37, 39, 40, 42], false);
        $Pastelail->attacks()->sync([44, 45, 22, 19], false);
        $Plumélia->attacks()->sync([18, 20, 21, 45], false);
        $Alcyora->attacks()->sync([43, 45, 21, 20], false);
        $Fluffurnis->attacks()->sync([1, 2, 48, 46], false);
        $Obscurion->attacks()->sync([15, 16, 17, 18], false);
        $Celestiel->attacks()->sync([19, 20, 21, 22], false);
        $Terraklysm->attacks()->sync([49, 50, 51, 24], false);
    }
}