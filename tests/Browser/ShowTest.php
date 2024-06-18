<?php

use Laravel\Dusk\Browser;

test('show', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
                ->waitForText('Pokédex')
                ->click('#Name')
                ->pause(2000)
                ->assertSee('Description');
    });
});
