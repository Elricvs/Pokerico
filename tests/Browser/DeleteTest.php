<?php

use App\Models\User;
use Laravel\Dusk\Browser;

test('delete', function () {
    $this->browse(function(Browser $browser) {
        $user = User::find(1);
        $browser->loginAs($user)
            ->visit('/admin/pokemon') //url du site
            ->waitForText('Liste')
            ->click('#Delete1')
            ->waitForText('sûr')
            ->click('#deleteok')
            ->pause(2000)
            ->visit('/')
            ->assertDontSee('Électrofeu');
    });
    
});
