<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class ExampleTest extends DuskTestCase
{
    public function testProtectedRoute()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                    ->visit('/')
                    ->assertSee('Laravel')
                    ->assertSee('Protected API: Yes');
        });
    }

    public function testPublicRoute()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(1)
                    ->visit('/')
                    ->assertSee('Laravel')
                    ->assertSee('Public API: Yes');
        });
    }
}
