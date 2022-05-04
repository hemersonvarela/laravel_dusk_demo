<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Login;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginFormWithWrongCredentials()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new Login())
                ->setWrongCredentials()
                ->pause(500)
                ->assertSee('Whoops! Something went wrong.');
        });
    }
}
