<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->assertSee('Laravel');
        // });
        // $user = factory(\App\User::class)->create([
        //     'email' => 'shalini1@laravel.com',
        // ]);

        // $this->browse(function ($browser) use ($user) {
        //     $browser->visit('/login')
        //             ->type('email', $user->email)
        //             ->type('password', 'secret')
        //             ->press('Login')
        //             ->assertPathIs('/home');
        // });
        // $this->browse(function ($browser) {
        //     $browser->visit('/register')
        //             ->assertSee('Register')
        //             ->type('name', 'abcde')
        //             ->type('email', 'abcde1@gmail.com')
        //             ->type('password', 'abcde1234')
        //             ->type('password_confirmation', 'abcde1234')
        //             ->press('Register')
        //             ->assertPathIs('/home');
        // });
    }
}
