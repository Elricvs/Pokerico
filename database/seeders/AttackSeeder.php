<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Attack::create([
            'name' => 'Charge',
            'type_id' => '10',
            'description' => 'Le lanceur charge la cible et la percute de tout son poids.',
            'puissance' => '40',
            'precision' => '100',
            'PP' => '35',

        ]);

        \App\Models\Attack::create([
            'name' => 'Écrase Face',
            'type_id' => '10',
            'description' => 'Le lanceur écrase la cible avec l’un de ses membres, tels qu’une de ses pattes avant ou sa longue queue.',
            'puissance' => '40',
            'precision' => '100',
            'PP' => '35',

        ]);

        \App\Models\Attack::create([
            'name' => 'Crocs Feu',
            'type_id' => '7',
            'description' => 'Le lanceur utilise une morsure enflammée qui peut aussi brûler ou apeurer la cible.',
            'puissance' => '65',
            'precision' => '95',
            'PP' => '15',

        ]);

        \App\Models\Attack::create([
            'name' => 'Lance-Flammes',
            'type_id' => '7',
            'description' => 'La cible reçoit un torrent de flammes qui peut aussi la brûler.',
            'puissance' => '90',
            'precision' => '100',
            'PP' => '15',

        ]);

        \App\Models\Attack::create([
            'name' => 'Charge Foudre',
            'type_id' => '5',
            'description' => 'Le lanceur s’enveloppe d’une charge électrique surpuissante et se jette sur la cible, ce qui peut aussi la paralyser.',
            'puissance' => '130',
            'precision' => '85',
            'PP' => '5',

        ]);

        \App\Models\Attack::create([
            'name' => 'Frotte-Frimousse',
            'type_id' => '5',
            'description' => 'Le lanceur attaque en frottant ses bajoues chargées d’électricité, ce qui paralyse la cible.',
            'puissance' => '20',
            'precision' => '100',
            'PP' => '20',

        ]);

        \App\Models\Attack::create([
            'name' => 'Vole-Vie',
            'type_id' => '11',
            'description' => 'Une attaque qui absorbe les nutriments et convertit la moitié des dégâts infligés en PV pour le lanceur.',
            'puissance' => '20',
            'precision' => '100',
            'PP' => '25',

        ]);

        \App\Models\Attack::create([
            'name' => 'Lame Feuille',
            'type_id' => '11',
            'description' => 'Une feuille coupante comme une lame entaille la cible. Taux de critiques élevé.',
            'puissance' => '90',
            'precision' => '100',
            'PP' => '15',

        ]);

        \App\Models\Attack::create([
            'name' => 'Draco-Griffe',
            'type_id' => '3',
            'description' => 'Le lanceur lacère la cible de ses grandes griffes aiguisées.',
            'puissance' => '80',
            'precision' => '100',
            'PP' => '15',

        ]);

        \App\Models\Attack::create([
            'name' => 'Draco-Souffle',
            'type_id' => '3',
            'description' => 'Le lanceur souffle fort sur la cible pour lui infliger des dégâts, ce qui peut aussi la paralyser.',
            'puissance' => '60',
            'precision' => '100',
            'PP' => '20',

        ]);

        \App\Models\Attack::create([
            'name' => 'Hydrocanon',
            'type_id' => '4',
            'description' => 'Un puissant jet d’eau est dirigé sur la cible.',
            'puissance' => '110',
            'precision' => '80',
            'PP' => '5',

        ]);

        \App\Models\Attack::create([
            'name' => 'Bulles do',
            'type_id' => '4',
            'description' => 'Des bulles sont envoyées avec puissance sur la cible, ce qui peut aussi baisser sa Vitesse.',
            'puissance' => '65',
            'precision' => '100',
            'PP' => '20',

        ]);

        \App\Models\Attack::create([
            'name' => 'Choc Mental',
            'type_id' => '13',
            'description' => 'Une faible vague télékinétique frappe la cible, ce qui peut aussi la plonger dans la confusion.',
            'puissance' => '50',
            'precision' => '100',
            'PP' => '25',

        ]);

        \App\Models\Attack::create([
            'name' => 'Frappe Psy',
            'type_id' => '13',
            'description' => 'Le lanceur matérialise des ondes mystérieuses qu’il projette sur la cible, ce qui inflige des dégâts physiques à celle-ci.',
            'puissance' => '100',
            'precision' => '100',
            'PP' => '10',

        ]);

        \App\Models\Attack::create([
            'name' => 'Tranche-Nuit',
            'type_id' => '18',
            'description' => 'Le lanceur lacère la cible à la première occasion. Taux de critiques élevé.',
            'puissance' => '70',
            'precision' => '100',
            'PP' => '15',

        ]);

        \App\Models\Attack::create([
            'name' => 'Mâchouille',
            'type_id' => '18',
            'description' => 'Le lanceur mord la cible de ses crocs pointus, ce qui peut aussi baisser sa Défense.',
            'puissance' => '80',
            'precision' => '100',
            'PP' => '15',

        ]);

        \App\Models\Attack::create([
            'name' => 'Dark Lariat',
            'type_id' => '18',
            'description' => 'Le lanceur étend les bras et frappe l’adversaire en tournant violemment. Il inflige des dégâts et ignore les changements de stats de la cible.',
            'puissance' => '85',
            'precision' => '100',
            'PP' => '10',

        ]);

        \App\Models\Attack::create([
            'name' => 'Cru-Ailes',
            'type_id' => '17',
            'description' => 'Le lanceur déploie largement ses ailes majestueuses pour attaquer la cible.',
            'puissance' => '60',
            'precision' => '100',
            'PP' => '35',

        ]);

        \App\Models\Attack::create([
            'name' => 'Éclat Magique',
            'type_id' => '6',
            'description' => 'Le lanceur libère une puissante décharge lumineuse qui inflige des dégâts à l’ennemi.',
            'puissance' => '80',
            'precision' => '100',
            'PP' => '10',

        ]);

        \App\Models\Attack::create([
            'name' => 'Typhon Passionné',
            'type_id' => '6',
            'description' => 'Le lanceur déclenche un violent typhon de haine et d’amour qui s’abat sur la cible. Peut baisser l’Attaque de celle-ci.',
            'puissance' => '100',
            'precision' => '80',
            'PP' => '5',

        ]);

        \App\Models\Attack::create([
            'name' => 'Voix Envoûtante',
            'type_id' => '6',
            'description' => 'Le lanceur attaque sa cible avec sa voix angélique. Cette capacité rend la cible confuse si ses stats ont augmenté pendant ce tour.',
            'puissance' => '80',
            'precision' => '100',
            'PP' => '10',

        ]);

        \App\Models\Attack::create([
            'name' => 'Choc Émotionnel',
            'type_id' => '6',
            'description' => 'Le lanceur attaque la cible avec une telle force que celle-ci peut s’en retrouver profondément troublée et voir son Attaque Spéciale baisser.',
            'puissance' => '75',
            'precision' => '100',
            'PP' => '15',

        ]);

        \App\Models\Attack::create([
            'name' => 'Aegis Maxima',
            'type_id' => '1',
            'description' => 'Le lanceur se transforme en bouclier extrêmement solide et charge vigoureusement sa cible.',
            'puissance' => '100',
            'precision' => '100',
            'PP' => '5',

        ]);

        \App\Models\Attack::create([
            'name' => 'Tête de Fer',
            'type_id' => '1',
            'description' => 'Le lanceur heurte la cible avec sa tête dure comme de l’acier, ce qui peut aussi l’apeurer.',
            'puissance' => '80',
            'precision' => '100',
            'PP' => '15',

        ]);

        \App\Models\Attack::create([
            'name' => 'Pisto-Poing',
            'type_id' => '1',
            'description' => 'Le lanceur envoie des coups de poing aussi rapides que des balles de revolver. Frappe en priorité.',
            'puissance' => '40',
            'precision' => '100',
            'PP' => '30',

        ]);

        \App\Models\Attack::create([
            'name' => 'Gladius Maximus	',
            'type_id' => '1',
            'description' => 'Le lanceur utlise son épée et pourfend vigoureusement sa cible.',
            'puissance' => '100',
            'precision' => '100',
            'PP' => '5',

        ]);

        \App\Models\Attack::create([
            'name' => 'Strido-Son',
            'type_id' => '1',
            'description' => 'Un cri horrible tel un crissement métallique qui réduit beaucoup la Défense Spéciale de la cible.',
            'puissance' => '0',
            'precision' => '85',
            'PP' => '40',

        ]);

        \App\Models\Attack::create([
            'name' => 'Avalanche',
            'type_id' => '8',
            'description' => 'Une capacité dont la puissance est doublée si le lanceur a été blessé par la cible durant ce tour.',
            'puissance' => '60',
            'precision' => '100',
            'PP' => '10',

        ]);

        \App\Models\Attack::create([
            'name' => 'Blizzard',
            'type_id' => '8',
            'description' => 'Une violente tempête de neige s’abat sur la cible, ce qui peut aussi la geler.',
            'puissance' => '110',
            'precision' => '70',
            'PP' => '5',

        ]);

        \App\Models\Attack::create([
            'name' => 'Chute de Neige',
            'type_id' => '8',
            'description' => 'Le lanceur invoque une tempête de neige qui dure cinq tours, ce qui augmente la Défense des Pokémon de type Glace.',
            'puissance' => '0',
            'precision' => '0',
            'PP' => '10',

        ]);

        \App\Models\Attack::create([
            'name' => 'Éclats Glace',
            'type_id' => '8',
            'description' => 'Le lanceur crée des éclats de glace qu’il envoie sur la cible. Frappe en priorité.',
            'puissance' => '40',
            'precision' => '100',
            'PP' => '30',

        ]);

        \App\Models\Attack::create([
            'name' => 'Laser Glace',
            'type_id' => '8',
            'description' => 'Un rayon de glace frappe la cible, ce qui peut aussi la geler.',
            'puissance' => '90',
            'precision' => '100',
            'PP' => '10',

        ]);

        \App\Models\Attack::create([
            'name' => 'Big Splash',
            'type_id' => '2',
            'description' => 'Le lanceur utilise son corps pour attaquer sa cible. Plus la Défense du lanceur est élevée, plus les dégâts infligés sont importants.',
            'puissance' => '80',
            'precision' => '100',
            'PP' => '10',

        ]);

        \App\Models\Attack::create([
            'name' => 'Exploforce	',
            'type_id' => '2',
            'description' => 'Le lanceur rassemble ses forces et laisse éclater son pouvoir, ce qui peut aussi baisser la Défense Spéciale de la cible.',
            'puissance' => '120',
            'precision' => '70',
            'PP' => '5',

        ]);

        \App\Models\Attack::create([
            'name' => 'Casse-Brique',
            'type_id' => '2',
            'description' => 'Le lanceur attaque avec le tranchant de la main. Permet aussi de briser les barrières comme Mur Lumière et Protection.',
            'puissance' => '75',
            'precision' => '100',
            'PP' => '15',

        ]);

        \App\Models\Attack::create([
            'name' => 'Roc-Boulet',
            'type_id' => '14',
            'description' => 'Le lanceur attaque en projetant un gros rocher sur la cible. Il doit se reposer au tour suivant.',
            'puissance' => '150',
            'precision' => '90',
            'PP' => '15',

        ]);

        \App\Models\Attack::create([
            'name' => 'Boule Pollen',
            'type_id' => '9',
            'description' => 'Sur un ennemi, le lanceur envoie une boule explosive qui fait des dégâts. Sur un allié, il envoie du bon pollen nutritif qui fait récupérer des PV.',
            'puissance' => '90',
            'precision' => '100',
            'PP' => '15',

        ]);

        \App\Models\Attack::create([
            'name' => 'Dard-Nuée',
            'type_id' => '9',
            'description' => 'Envoie une rafale de dards. Peut toucher de deux à cinq fois.',
            'puissance' => '25',
            'precision' => '95',
            'PP' => '20',

        ]);

        \App\Models\Attack::create([
            'name' => 'Dard Mortel',
            'type_id' => '9',
            'description' => 'Le lanceur augmente énormément son Attaque si une cible est mise K.O. par cette capacité.',
            'puissance' => '50',
            'precision' => '100',
            'PP' => '25',

        ]);

        \App\Models\Attack::create([
            'name' => 'Griffes Funestes',
            'type_id' => '12',
            'description' => 'Le lanceur attaque avec des griffes destructrices. La cible peut aussi être empoisonnée, paralysée, ou endormie.',
            'puissance' => '80',
            'precision' => '100',
            'PP' => '15',

        ]);

        \App\Models\Attack::create([
            'name' => 'Dard-Venin',
            'type_id' => '12',
            'description' => 'Un dard toxique transperce la cible et peut aussi l’empoisonner.',
            'puissance' => '15',
            'precision' => '100',
            'PP' => '35',

        ]);

        \App\Models\Attack::create([
            'name' => 'Direct Toxik',
            'type_id' => '12',
            'description' => 'Le lanceur attaque la cible avec un tentacule, un bras, ou un autre membre imprégné de poison, ce qui peut aussi empoisonner la cible.',
            'puissance' => '80',
            'precision' => '100',
            'PP' => '20',

        ]);

        \App\Models\Attack::create([
            'name' => 'Bec Vrille',
            'type_id' => '17',
            'description' => 'Une attaque utilisant le bec comme une perceuse.',
            'puissance' => '80',
            'precision' => '100',
            'PP' => '20',

        ]);

        \App\Models\Attack::create([
            'name' => 'Picpic',
            'type_id' => '17',
            'description' => 'Le lanceur frappe la cible d’un bec acéré ou d’une corne pointue pour infliger des dégâts.',
            'puissance' => '35',
            'precision' => '100',
            'PP' => '35',

        ]);

        \App\Models\Attack::create([
            'name' => 'Tranch’Air',
            'type_id' => '17',
            'description' => 'Le lanceur appelle des vents tranchants qui lacèrent la cible. Taux de critiques élevé.',
            'puissance' => '60',
            'precision' => '95',
            'PP' => '25',

        ]);

        \App\Models\Attack::create([
            'name' => 'Chant Antique',
            'type_id' => '10',
            'description' => 'Le lanceur attaque la cible en lui chantant une chanson d’un autre temps qui peut aussi l’endormir.',
            'puissance' => '75',
            'precision' => '100',
            'PP' => '10',

        ]);

        \App\Models\Attack::create([
            'name' => 'Éclate Griffe',
            'type_id' => '10',
            'description' => 'Le lanceur lacère la cible avec des griffes solides et aiguisées, ce qui peut aussi baisser la Défense de celle-ci.',
            'puissance' => '75',
            'precision' => '95',
            'PP' => '10',

        ]);

        \App\Models\Attack::create([
            'name' => 'Entrave',
            'type_id' => '10',
            'description' => 'Empêche la cible de répéter sa dernière attaque. Dure quatre tours.',
            'puissance' => '0',
            'precision' => '100',
            'PP' => '20',

        ]);

        \App\Models\Attack::create([
            'name' => 'Abîme',
            'type_id' => '15',
            'description' => 'Le lanceur fait tomber la cible dans une crevasse. Si cette attaque réussit, elle met K.O. sur le coup.',
            'puissance' => '1',
            'precision' => '30',
            'PP' => '5',

        ]);

        \App\Models\Attack::create([
            'name' => 'Séisme',
            'type_id' => '15',
            'description' => 'Le lanceur provoque un tremblement de terre touchant tous les Pokémon autour de lui.',
            'puissance' => '100',
            'precision' => '100',
            'PP' => '10',

        ]);

        \App\Models\Attack::create([
            'name' => 'Piétisol',
            'type_id' => '15',
            'description' => 'Le lanceur piétine le sol et inflige des dégâts à tous les Pokémon autour de lui. Baisse aussi leur Vitesse.',
            'puissance' => '60',
            'precision' => '100',
            'PP' => '20',

        ]);
    }
}
