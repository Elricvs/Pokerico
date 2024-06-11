<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Type::create([
            'name' => 'Acier',
            'imgurl' => '/storage/images/type/Acier.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Combat',
            'imgurl' => '/storage/images/type/Combat.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Dragon',
            'imgurl' => '/storage/images/type/Dragon.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Eau',
            'imgurl' => '/storage/images/type/Eau.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Électrik',
            'imgurl' => '/storage/images/type/Électrik.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Fée',
            'imgurl' => '/storage/images/type/Fée.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Feu',
            'imgurl' => '/storage/images/type/Feu.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Glace',
            'imgurl' => '/storage/images/type/Glace.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Insecte',
            'imgurl' => '/storage/images/type/Insecte.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Normal',
            'imgurl' => '/storage/images/type/Normal.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Plante',
            'imgurl' => '/storage/images/type/Plante.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Poison',
            'imgurl' => '/storage/images/type/Poison.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Psy',
            'imgurl' => '/storage/images/type/Psy.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Roche',
            'imgurl' => '/storage/images/type/Roche.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Sol',
            'imgurl' => '/storage/images/type/Sol.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Spectre',
            'imgurl' => '/storage/images/type/Spectre.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Vol',
            'imgurl' => '/storage/images/type/Vol.png',
            'color' => '',
        ]);

        \App\Models\Type::create([
            'name' => 'Ténèbres',
            'imgurl' => '/storage/images/type/Ténèbres.png',
            'color' => '',
        ]);
    }
}
