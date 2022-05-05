<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Dashboard;
use Tests\Browser\Pages\Login;
use Tests\DuskTestCase;

class DashboardTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testDashboardPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new Login())
                ->submitLoginForm()
                ->pause(1000)
                ->visit(new Dashboard());
        });
    }
}
