<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PagesTest extends DuskTestCase
{
    public function testHomepage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('home'))
                ->assertSee('Кандидатствай');
        });
    }

    public function testSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('success'))
                ->assertSee('Данните ти са приети успешно.');
        });
    }
}
