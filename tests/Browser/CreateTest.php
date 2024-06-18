<?php

use App\Models\User;
use Laravel\Dusk\Browser;

test('create', function () {
    $this->browse(function(Browser $browser) {
        $user = User::find(1);
        $browser->loginAs($user)
                ->visit('/admin/pokemon/create')
                ->waitForText('Créer')
                ->type('#name', 'testpokemon')
                ->type('#description', 'test')
                ->type('#hp', 22)
                ->type('#att', 30)
                ->type('#def', 40)
                ->type('#attspe', 55)
                ->type('#defspe', 42)
                ->type('#vit', 70)
                ->type('#size', 30)
                ->type('#weight', 25)
                ->select('#type1_id', 1)
                ->select('#type2_id', 2)
                ->select('#attack1_id', 1)
                ->select('#attack2_id', 2)
                ->select('#attack3_id', 3)
                ->select('#attack4_id', 4)
                ->click('#create')
                ->pause(2000)
                ->assertSee('testpokemon');
    });
});
