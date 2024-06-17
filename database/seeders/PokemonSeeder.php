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
            'hp' => 39,
            'att' => 52,
            'def' => 45,
            'attspe' => 60,
            'defspe' => 50,
            'vit' => 65,
            'size' => 0.75,
            'weight' => 3.2,
            'type1_id' => 7,
            'type2_id' => 5,
            'Attack1_id' => 1,
            'Attack2_id' => 2,
            'Attack3_id' => 3,
            'Attack4_id' => 6,
            'imgurl' => '/storage/images/pokemon/Électrofeu.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Pyrovolt',
            'description' => 'Évolution de Électrofeu',
            'hp' => 58,
            'att' => 64,
            'def' => 58,
            'attspe' => 80,
            'defspe' => 65,
            'vit' => 80,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 7,
            'type2_id' => 5,
            'Attack1_id' => 3,
            'Attack2_id' => 4,
            'Attack3_id' => 5,
            'Attack4_id' => 6,
            'imgurl' => '/storage/images/pokemon/Pyrovolt.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Brasiombre',
            'description' => 'Évolution de Pyrovolt',
            'hp' => 78,
            'att' => 84,
            'def' => 78,
            'attspe' => 109,
            'defspe' => 85,
            'vit' => 100,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 7,
            'type2_id' => 5,
            'Attack1_id' => 3,
            'Attack2_id' => 4,
            'Attack3_id' => 5,
            'Attack4_id' => 6,
            'imgurl' => '/storage/images/pokemon/Brasiombre.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Verdorn',
            'description' => 'Starter',
            'hp' => 45,
            'att' => 49,
            'def' => 49,
            'attspe' => 65,
            'defspe' => 65,
            'vit' => 45,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 11,
            'type2_id' => 3,
            'Attack1_id' => 1,
            'Attack2_id' => 2,
            'Attack3_id' => 7,
            'Attack4_id' => 9,
            'imgurl' => '/storage/images/pokemon/Verdorn.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Sylvagon',
            'description' => 'Évolution de Verdorn',
            'hp' => 60,
            'att' => 62,
            'def' => 63,
            'attspe' => 80,
            'defspe' => 80,
            'vit' => 60,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 11,
            'type2_id' => 3,
            'Attack1_id' => 7,
            'Attack2_id' => 8,
            'Attack3_id' => 9,
            'Attack4_id' => 10,
            'imgurl' => '/storage/images/pokemon/Sylvagon.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Feuillagon',
            'description' => 'Évolution de Sylvagon',
            'hp' => 80,
            'att' => 82,
            'def' => 83,
            'attspe' => 100,
            'defspe' => 100,
            'vit' => 80,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 11,
            'type2_id' => 3,
            'Attack1_id' => 7,
            'Attack2_id' => 8,
            'Attack3_id' => 9,
            'Attack4_id' => 10,
            'imgurl' => '/storage/images/pokemon/Feuillagon.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Maréspion',
            'description' => 'Starteur',
            'hp' => 44,
            'att' => 48,
            'def' => 65,
            'attspe' => 50,
            'defspe' => 64,
            'vit' => 43,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 4,
            'type2_id' => 13,
            'Attack1_id' => 1,
            'Attack2_id' => 2,
            'Attack3_id' => 12,
            'Attack4_id' => 13,
            'imgurl' => '/storage/images/pokemon/Maréspion.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Mindwave',
            'description' => 'Évolution de Maréspion',
            'hp' => 59,
            'att' => 63,
            'def' => 80,
            'attspe' => 65,
            'defspe' => 80,
            'vit' => 58,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 4,
            'type2_id' => 13,
            'Attack1_id' => 11,
            'Attack2_id' => 12,
            'Attack3_id' => 13,
            'Attack4_id' => 14,
            'imgurl' => '/storage/images/pokemon/Mindwave.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Aqualith',
            'description' => 'Évolution de Mindwave',
            'hp' => 79,
            'att' => 83,
            'def' => 100,
            'attspe' => 85,
            'defspe' => 105,
            'vit' => 78,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 4,
            'type2_id' => 13,
            'Attack1_id' => 11,
            'Attack2_id' => 12,
            'Attack3_id' => 13,
            'Attack4_id' => 14,
            'imgurl' => '/storage/images/pokemon/Aqualith.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Obscurion',
            'description' => 'Légendaire',
            'hp' => 106,
            'att' => 90,
            'def' => 130,
            'attspe' => 110,
            'defspe' => 154,
            'vit' => 90,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 18,
            'type2_id' => null,
            'Attack1_id' => 15,
            'Attack2_id' => 16,
            'Attack3_id' => 17,
            'Attack4_id' => 18,
            'imgurl' => '/storage/images/pokemon/Obscurion.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Celestiel',
            'description' => 'Légendaire',
            'hp' => 106,
            'att' => 130,
            'def' => 90,
            'attspe' => 110,
            'defspe' => 154,
            'vit' => 90,
            'size' => 120,
            'weight' => 0.4,
            'type1_id' => 6,
            'type2_id' => null,
            'Attack1_id' => 19,
            'Attack2_id' => 20,
            'Attack3_id' => 21,
            'Attack4_id' => 22,
            'imgurl' => '/storage/images/pokemon/Celestiel.jpg'
        ]);
    }
}
