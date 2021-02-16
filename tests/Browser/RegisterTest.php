<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @test
     * @return void
     */
public function shouldSeePasswordValidationFail()
{
    $this->browse(function (Browser $browser) {
        $browser->visit('/register')
                ->type('name', 'José')
                ->type('email', 'jose.filho@laraveling.tech')
                ->type('password', '123')
                ->type('password_confirmation', '123')
                ->press('@register')
                ->assertSee('The password must');
    });
}

    /**
     * @test
     */
public function testShouldCompleteRegistration()
{
    $this->browse(function (Browser $browser) {
        $browser->visit('/register')
        ->type('name', 'José Filho')
        ->type('email', 'jose2@dusk.com')
        ->type('password', '12345678')
        ->type('password_confirmation', '12345678')
        ->press('@register')
        ->assertPathIs('/dashboard');
    });
}

    /**
     * @test2
     */
    public function logoutShouldRedirectToHome()
    {
        $this->browse(function (Browser $browser) {
            $browser->click('img.object-cover')
                ->clickLink('Logout')
                ->assertPathIs('/');
        });
    }

    /**
     * @test2
     */
    public function shouldRedirectToLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboard')
                ->assertPathIs('/login');
        });
    }

    /**
     * @test2
     */
    public function loginShouldWork()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'jose.filho@laraveling.tech')
                ->type('password', '41415311')
                ->press('@login')
                ->assertPathIs('/dashboard');
        });
    }
}
