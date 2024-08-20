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
            'description' => 'Électrofeu est réputé pour sa capacité à contrôler à la fois la foudre et le feu, combinant les deux éléments pour lancer des attaques dévastatrices. Lorsqu’il charge son énergie, des éclairs zèbrent le ciel autour de lui et la température augmente drastiquement, annonçant une tempête imminente. Son cri puissant résonne comme un tonnerre, intimidant ses adversaires avant même que le combat ne commence.',
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
            'imgurl' => '/storage/images/pokemon/Aqualith.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Armurion',
            'description' => 'Armurion est un Pokémon loyal et courageux, toujours prêt à protéger ses alliés. Son armure argentée brille au soleil, renvoyant l’éclat de son esprit indomptable. Malgré son apparence robuste, il se déplace avec agilité, brandissant son épée avec une précision redoutable. Il est souvent considéré comme le gardien des anciennes légendes, veillant sur des trésors oubliés et combattant les forces du mal.',
            'hp' => 40,
            'att' => 55,
            'def' => 80,
            'attspe' => 35,
            'defspe' => 60,
            'vit' => 35,
            'size' => 1.3,
            'weight' => 80,
            'type1_id' => 1,
            'type2_id' => null,
            'imgurl' => '/storage/images/pokemon/Armurion.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Metaknight',
            'description' => 'Évolution d Armurion',
            'hp' => 80,
            'att' => 135,
            'def' => 130,
            'attspe' => 95,
            'defspe' => 90,
            'vit' => 70,
            'size' => 1.8,
            'weight' => 150,
            'type1_id' => 1,
            'type2_id' => null,
            'imgurl' => '/storage/images/pokemon/Metaknight.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Frostine',
            'description' => 'Frostine est un Pokémon doux et mystérieux qui incarne la pureté des terres enneigées. Il est souvent trouvé sur les sommets des montagnes glacées, où il veille sur les flocons qui tombent délicatement autour de lui. Son pelage est fait de neige pure, et sa queue forme une vrille de glace qui brille sous la lumière de la lune. Il est capable de contrôler les tempêtes de neige, enveloppant ses ennemis dans un froid mordant. Sa nature calme et posée contraste avec la puissance glaciale qu’il peut libérer en cas de danger. On raconte que la présence de Frostine apporte un hiver éternel là où il réside.',
            'hp' => 38,
            'att' => 41,
            'def' => 40,
            'attspe' => 50,
            'defspe' => 65,
            'vit' => 65,
            'size' => 0.6,
            'weight' => 8.6,
            'type1_id' => 8,
            'type2_id' => null,
            'imgurl' => '/storage/images/pokemon/Frostine.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Cryolynx',
            'description' => 'Évolution de Frostine',
            'hp' => 73,
            'att' => 67,
            'def' => 75,
            'attspe' => 81,
            'defspe' => 100,
            'vit' => 109,
            'size' => 1.1,
            'weight' => 16,
            'type1_id' => 8,
            'type2_id' => null,
            'imgurl' => '/storage/images/pokemon/Cryolynx.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Massrold',
            'description' => 'Pugnorock est un Pokémon massif et puissant, connu pour sa force inégalée et sa détermination inébranlable. Son corps robuste est fait de pierre, et ses muscles sont durs comme le roc. Il passe son temps à s’entraîner dans les montagnes, frappant des rochers jusqu’à ce qu’ils se réduisent en poussière. Pugnorock est un combattant naturel, utilisant ses poings colossaux pour asséner des coups dévastateurs à ses adversaires. Sa stratégie de combat repose sur la force brute, mais il sait également utiliser le terrain à son avantage, lançant des rochers avec une précision redoutable. Sa ténacité en fait un allié redoutable en combat, prêt à affronter n’importe quel défi avec une confiance inébranlable.',
            'hp' => 100,
            'att' => 140,
            'def' => 130,
            'attspe' => 60,
            'defspe' => 75,
            'vit' => 55,
            'size' => 2.1,
            'weight' => 250,
            'type1_id' => 2,
            'type2_id' => 14,
            'imgurl' => '/storage/images/pokemon/Massrold.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Venapic',
            'description' => 'Venapic est un Pokémon agile et redoutable, connu pour sa capacité à se déplacer rapidement tout en délivrant des piqûres venimeuses à ses ennemis. Son corps est recouvert de rayures noires et jaunes, et ses ailes translucides vibrent à une vitesse incroyable, lui permettant de planer silencieusement avant d’attaquer. Venapic vit en colonie, où il joue un rôle essentiel dans la protection de son nid contre les intrus. Son dard, long et affûté, est imprégné d’un venin paralysant qui peut immobiliser même les adversaires les plus coriaces. Lorsqu’il se sent menacé, Venapic libère une nuée de toxines qui enveloppe son ennemi, le rendant confus et affaibli.',
            'hp' => 100,
            'att' => 140,
            'def' => 130,
            'attspe' => 60,
            'defspe' => 75,
            'vit' => 55,
            'size' => 2.1,
            'weight' => 250,
            'type1_id' => 9,
            'type2_id' => 12,
            'imgurl' => '/storage/images/pokemon/Venapic.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Venombee',
            'description' => 'Évolution de Venapic',
            'hp' => 100,
            'att' => 140,
            'def' => 130,
            'attspe' => 60,
            'defspe' => 75,
            'vit' => 55,
            'size' => 2.1,
            'weight' => 250,
            'type1_id' => 9,
            'type2_id' => 12,
            'imgurl' => '/storage/images/pokemon/Venombee.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Pastelail',
            'description' => '',
            'hp' => 100,
            'att' => 140,
            'def' => 130,
            'attspe' => 60,
            'defspe' => 75,
            'vit' => 55,
            'size' => 2.1,
            'weight' => 250,
            'type1_id' => 17,
            'type2_id' => 6,
            'imgurl' => '/storage/images/pokemon/Pastelail.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Plumélia',
            'description' => 'Évolution de Pastelail',
            'hp' => 100,
            'att' => 140,
            'def' => 130,
            'attspe' => 60,
            'defspe' => 75,
            'vit' => 55,
            'size' => 2.1,
            'weight' => 250,
            'type1_id' => 17,
            'type2_id' => 6,
            'imgurl' => '/storage/images/pokemon/Plumélia.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Alcyora',
            'description' => 'Évolution de Plumélia',
            'hp' => 100,
            'att' => 140,
            'def' => 130,
            'attspe' => 60,
            'defspe' => 75,
            'vit' => 55,
            'size' => 2.1,
            'weight' => 250,
            'type1_id' => 17,
            'type2_id' => 6,
            'imgurl' => '/storage/images/pokemon/Alcyora.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Fluffurnis',
            'description' => 'Fluffurnis est un Pokémon doux et bienveillant qui incarne la pureté du crépuscule. Avec son pelage moelleux blanc-rosé, il ressemble à un petit renard auréolé d’une lumière douce et réconfortante. Ses grands yeux roses reflètent une sagesse et une curiosité innocente, toujours attentif aux émotions de son dresseur. Fluffurnis est connu pour son agilité et sa capacité à apaiser les autres Pokémon avec une aura apaisante. En dépit de son apparence délicate, il est doté d’une force intérieure qui le rend redoutable en combat lorsqu’il défend ceux qu’il aime. Ce Pokémon est souvent associé au calme et à la sérénité, transformant l’énergie environnante en une brise douce et réconfortante pour ceux qui sont à ses côtés.',
            'hp' => 30,
            'att' => 56,
            'def' => 35,
            'attspe' => 25,
            'defspe' => 35,
            'vit' => 72,
            'size' => 0.3,
            'weight' => 3.5,
            'type1_id' => 10,
            'type2_id' => null,
            'imgurl' => '/storage/images/pokemon/Fluffurnis.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Lumifluff',
            'description' => 'Lumifluff est l’évolution gracieuse et majestueuse de Fluffurnis. Son pelage a pris une teinte plus éclatante, avec des nuances de rose plus vives et une fourrure blanche plus soyeuse qui scintille légèrement sous la lumière du crépuscule. Ses yeux ont gagné en profondeur, exprimant une sagesse et une maturité accrues. Lumifluff est un Pokémon qui inspire respect et admiration, combinant douceur et puissance dans une harmonie parfaite. Ses capacités apaisantes se sont intensifiées, lui permettant de créer des champs d’énergie qui protègent et soignent ses alliés en combat. Connue pour sa loyauté indéfectible, Lumifluff est un protecteur naturel, prêt à intervenir pour maintenir la paix et le bien-être de son entourage.',
            'hp' => 55,
            'att' => 81,
            'def' => 60,
            'attspe' => 50,
            'defspe' => 70,
            'vit' => 97,
            'size' => 0.5,
            'weight' => 4.5,
            'type1_id' => 10,
            'type2_id' => null,
            'imgurl' => '/storage/images/pokemon/Lumifluff.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Obscurion',
            'description' => 'Ce redoutable dragon Légendaire incarne la puissance des ombres et la terreur nocturne. Son apparence imposante et menaçante, avec des ailes gigantesques et des écailles noires comme l’ébène, fait frémir ceux qui osent croiser son chemin. Perché sur un rocher sous un ciel orageux, Obscurion domine les ténèbres avec une présence écrasante, ses yeux rouges perçant l’obscurité d’une lueur malveillante.',
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
            'imgurl' => '/storage/images/pokemon/Obscurion.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Celestiel',
            'description' => 'Célestiel est un Pokémon légendaire de type Fée, incarnant la pureté, la magie et la beauté des forêts enchantées. Ce majestueux Pokémon ressemble à une créature féerique avec un corps élancé et gracieux, recouvert d’un pelage bleu pâle qui scintille doucement sous la lumière de la lune. Ses ailes translucides et étincelantes, rappelant les couleurs de l’arc-en-ciel, sont aussi délicates que puissantes, lui permettant de se déplacer avec une légèreté aérienne.',
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
            'imgurl' => '/storage/images/pokemon/Celestiel.jpg'
        ]);

        \App\Models\Pokemon::create([
            'name' => 'Terraklysm',
            'description' => 'Terraklysm est un Pokémon légendaire redouté pour sa puissance et son influence sur le monde terrestre. Son corps est fait d’une combinaison de roches et de métaux rares, fusionnés sous une pression intense au cœur des montagnes anciennes. Ce Pokémon, qui ressemble à un dragon massif et blindé, possède des griffes et des pointes acérées capables de fracturer la terre et les montagnes. Ses yeux rouge vif brillent d’une lueur menaçante, reflétant son immense pouvoir.',
            'hp' => 100,
            'att' => 134,
            'def' => 110,
            'attspe' => 80,
            'defspe' => 95,
            'vit' => 90,
            'size' => 2,
            'weight' => 200,
            'type1_id' => 15,
            'type2_id' => 1,
            'imgurl' => '/storage/images/pokemon/Terraklysm.jpg'
        ]);
    }
}
