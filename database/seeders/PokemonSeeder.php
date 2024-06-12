<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\Pokemon::create([
            'name' => 'Électrofeu',
            'description' => 'Starter',
            'hp' => 115,
            'att' => 52,
            'def' => 45,
            'attspe' => 60,
            'defspe' => 50,
            'vit' => 65,
            'size' => 0.75,
            'weight' => 3.2,
            'type1_id' => 7,
            'type2_id' => 5,
            'imgurl' => '/storage/images/pokemon/Électrofeu.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Pyrovolt',
            'description' => 'Évolution de Électrofeu',
            'hp' => 35,
            'att' => 150,
            'def' => 75,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 7,
            'type2_id' => 5,
            'imgurl' => '/storage/images/pokemon/Pyrovolt.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Brasiombre',
            'description' => 'Évolution de Pyrovolt',
            'hp' => 35,
            'att' => 150,
            'def' => 75,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 7,
            'type2_id' => 5,
            'imgurl' => '/storage/images/pokemon/Brasiombre.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Verdorn',
            'description' => 'Starter',
            'hp' => 35,
            'att' => 150,
            'def' => 75,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 11,
            'type2_id' => 3,
            'imgurl' => '/storage/images/pokemon/Verdorn.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Sylvagon',
            'description' => 'Évolution de Verdorn',
            'hp' => 35,
            'att' => 150,
            'def' => 75,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 11,
            'type2_id' => 3,
            'imgurl' => '/storage/images/pokemon/Sylvagon.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Feuillagon',
            'description' => 'Évolution de Sylvagon',
            'hp' => 35,
            'att' => 150,
            'def' => 75,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 11,
            'type2_id' => 3,
            'imgurl' => '/storage/images/pokemon/Feuillagon.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Maréspion',
            'description' => 'Starteur',
            'hp' => 35,
            'att' => 150,
            'def' => 75,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 4,
            'type2_id' => 13,
            'imgurl' => '/storage/images/pokemon/Maréspion.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Mindwave',
            'description' => 'Évolution de Maréspion',
            'hp' => 35,
            'att' => 150,
            'def' => 75,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 4,
            'type2_id' => 13,
            'imgurl' => '/storage/images/pokemon/Mindwave.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Aqualith',
            'description' => 'Évolution de Mindwave',
            'hp' => 35,
            'att' => 150,
            'def' => 75,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 4,
            'type2_id' => 13,
            'imgurl' => '/storage/images/pokemon/Aqualith.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Obscurion',
            'description' => 'Légendaire',
            'hp' => 35,
            'att' => 150,
            'def' => 75,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 18,
            'type2_id' => null,
            'imgurl' => '/storage/images/pokemon/Obscurion.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Celestiel',
            'description' => 'Légendaire',
            'hp' => 35,
            'att' => 150,
            'def' => 75,
            'attspe' => 50,
            'defspe' => 50,
            'vit' => 50,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 6,
            'type2_id' => null,
            'imgurl' => '/storage/images/pokemon/Celestiel.jpg'
        ]);
    }
}
