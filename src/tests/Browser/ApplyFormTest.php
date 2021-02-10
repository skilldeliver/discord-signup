<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ApplyFormTest extends DuskTestCase
{
    use withFaker;

    public function test_apply_form()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Кандидатствай')
                ->type('name', $this->faker->name)
                ->type('phone', $this->faker->phoneNumber)
                ->type('amount', $this->faker->numberBetween(1, 99999))
                ->type('email', $this->faker->safeEmail)
                ->click(".terms-label .checkmark")
                ->click(".privacy-label .checkmark")
                ->press('#submit-btn')
                ->assertPathIs('/success');
        });
    }

    public function test_apply_form_without_email()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Кандидатствай')
                ->type('name', $this->faker->name)
                ->type('phone', $this->faker->phoneNumber)
                ->type('amount', $this->faker->numberBetween(1, 99999))
                ->click(".terms-label .checkmark")
                ->click(".privacy-label .checkmark")
                ->press('#submit-btn')
                ->assertPathIs('/success');
        });
    }
}
