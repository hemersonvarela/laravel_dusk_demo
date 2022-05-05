<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Login;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    public function testLoginFormWithWrongCredentials()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new Login())
                ->setWrongCredentials()
                ->pause(500)
                ->assertSee('Whoops! Something went wrong.');
        });
    }

    public function testLoginForm()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new Login())
                ->submitLoginForm()
                ->pause(1000)
                ->assertSee('Dashboard');
        });
    }

}
