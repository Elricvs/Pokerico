<?php

use Laravel\Dusk\Browser;

test('basic example', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
                ->screenshot('ricotest')
                ->assertSee('Pokédex');
    });
});
