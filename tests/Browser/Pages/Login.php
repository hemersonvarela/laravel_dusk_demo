<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class Login extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/login';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        // check path
        $browser->assertPathIs($this->url());

        // check page labels
        $browser->assertSee('Email')
            ->assertSee('Password')
            ->assertSee('Remember me');
    }

    /**
     * Create a new playlist.
     *
     * @param  \Laravel\Dusk\Browser  $browser
     * @param  string  $name
     * @return void
     */
    public function setWrongCredentials(Browser $browser)
    {
        $browser
            ->type('@email', 'wrongUser')
            ->type('@password', 'wrongPassword')
            ->press('@btn');
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@email' => 'input[name=email]',
            '@password' => 'input[name=password]',
            '@btn' => 'button[type=submit]',
        ];
    }
}
