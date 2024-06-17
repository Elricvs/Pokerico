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
    }
}
