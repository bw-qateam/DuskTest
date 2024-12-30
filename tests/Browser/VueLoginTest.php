<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class VueLoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testVueLogin(): void
    {
        $_ENV['APP_URL'] = 'https://minxpay.vercel.app/#/sign-in';

        $screenshot = 'VueLogin';

        $this->browse(function (Browser $browser) use ($screenshot) {
            $browser->maximize()
                ->visit($_ENV['APP_URL'])
                ->assertSee('Minxpay')
                ->type('email', 'ali@test.com')->pause(1000)->screenshot($screenshot . '_001_' . time())
                ->type('password', 'Qwer1234')->pause(1000)->screenshot($screenshot . '_002_' . time())
                ->click('input#checkAgreementTnc')->pause(1000)->screenshot($screenshot . '_003_' . time())
                ->click('#kt_sign_in_submit')->pause(1000)->screenshot($screenshot . '_004_' . time())
                ->press('Ok, got it!')->pause(1000)->screenshot($screenshot . '_005_' . time())
                ->assertSee('Dashboard');
        });
    }
}
