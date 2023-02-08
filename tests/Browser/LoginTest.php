<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    use DatabaseMigrations;

    // public function testRegister(): void
    // {
    //     $this->browse(function ($browser) {
    //         $screenshot_name = 'TestRegister';

    //         $browser->visit('/register')
    //                 ->typeSlowly('name', 'taylor')
    //                 ->typeSlowly('email', 'taylor@laravel.com')
    //                 ->typeSlowly('password', '123456789')
    //                 ->typeSlowly('password_confirmation', '123456789')
    //                 ->screenshot($screenshot_name . '_001_' . time())
    //                 ->press('REGISTER')
    //                 ->assertPathIs('/dashboard')
    //                 ->assertSee('Dashboard')
    //                 ->screenshot($screenshot_name . '_002_' . time())
    //                 ->click('.relative button > div')
    //                 ->screenshot($screenshot_name . '_003_' . time())
    //                 ->assertSeeLink('Log Out')
    //                 ->clickAndWaitForReload('.absolute > div form a')
    //                 ->assertPathIs('/')
    //                 ->assertSee('Laravel')
    //                 ->screenshot($screenshot_name . '_004_' . time());
    //     });
    // }

    public function testLogin(): void
    {
        $user = User::factory()->create([
            'name' => 'taylor',
            'email' => 'taylor@laravel.com',
        ]);
        // $user2 = User::factory()->create([
        //     'name' => 'taylor2',
        //     'email' => 'taylor2@laravel.com',
        // ]);

        // // multiple browsers
        // $this->browse(function ($first, $second) {
            // $first->loginAs(User::find(1))
            //       ->visit('/home')
            //       ->waitForText('Message');
         
            // $second->loginAs(User::find(2))
            //        ->visit('/home')
            //        ->waitForText('Message')
            //        ->type('message', 'Hey Taylor')
            //        ->press('Send');
         
            // $first->waitForText('Hey Taylor')
            //       ->assertSee('Jeffrey Way');

            // $screenshot_name = 'TestLogin';
            // $screenshot_name2 = 'TestRegister';

            // $first->resize(768, 1024)
            //         ->loginAs(User::find(1))
            //         ->visit('/login')
            //         ->typeSlowly('email', $user->email)
            //         ->typeSlowly('password', 'password')
            //         ->screenshot($screenshot_name . '_001_' . time())
            //         ->press('LOG IN')
            //         ->assertPathIs('/dashboard')
            //         ->assertSee('Dashboard')
            //         ->screenshot($screenshot_name . '_002_' . time());

            // $second->maximize()
            //         ->loginAs(User::find(2))
            //         ->visit('/login')
            //         ->typeSlowly('email', $user2->email)
            //         ->typeSlowly('password', 'password')
            //         ->screenshot($screenshot_name . '_001_' . time())
            //         ->press('LOG IN')
            //         ->assertPathIs('/dashboard')
            //         ->assertSee('Dashboard')
            //         ->screenshot($screenshot_name . '_002_' . time());

            // $second->maximize()
            //         ->visit('/register')
            //         ->typeSlowly('name', 'taylor')
            //         ->typeSlowly('email', 'taylor@laravel.com')
            //         ->typeSlowly('password', '123456789')
            //         ->typeSlowly('password_confirmation', '123456789')
            //         ->screenshot($screenshot_name2 . '_001_' . time())
            //         ->press('REGISTER')
            //         ->assertPathIs('/dashboard')
            //         ->assertSee('Dashboard')
            //         ->screenshot($screenshot_name2 . '_002_' . time());
        // });



 
        $this->browse(function ($browser) use ($user) {
        // $this->browse(function ($browser) {

            $screenshot_name = 'TestLogin';

            // login > profile > logout
            $browser->maximize() // ->resize(768, 1024)
                    ->visit('/login')
                    ->assertPathIs('/login')
                    ->storeSource('Src_001');
//                     ->assertSee('Forgot your password?');
//                     ->typeSlowly('email', $user->email);
//                     ->typeSlowly('password', 'password')
//                     // ->responsiveScreenshots('R_' . $screenshot_name . '_001_' . time())
//                     ->screenshot($screenshot_name . '_001_' . time());
//                     ->storeSource('Src_001_' . time())
//                     ->press('LOG IN')
//                     ->assertPathIs('/dashboard')
//                     ->assertSee('Dashboard')
//                     // ->responsiveScreenshots('R_' . $screenshot_name . '_002_' . time())
//                     ->screenshot($screenshot_name . '_002_' . time())
//                     ->click('.relative button > div')
//                     ->waitForTextIn('.absolute > div > a', 'Profile')
//                     // ->responsiveScreenshots('R_' . $screenshot_name . '_003_' . time())
//                     ->screenshot($screenshot_name . '_003_' . time())
//                     // ->click('a[href="http://localhost:8000/logout"]');
//                     // ->assertSeeLink('Log Out')
//                     // ->pause(1000)
//                     ->mouseover('.absolute > div > a')
//                     // ->waitFor('.absolute > div form a')
//                     ->click('.absolute > div > a')
//                     // ->clickAndWaitForReload('.absolute > div form a')
//                     // ->clickLink('Log Out')
//                     ->assertPathIs('/profile')
//                     ->assertSee('Profile')
//                     ->storeConsoleLog('Console_001_' . time())
//                     // ->responsiveScreenshots('R_' . $screenshot_name . '_004_' . time());
//                     ->screenshot($screenshot_name . '_004_' . time())
//                     ->click('.relative button > div')
//                     ->waitForTextIn('.absolute > div form a', 'Log Out')
//                     // ->responsiveScreenshots('R_' . $screenshot_name . '_003_' . time())
//                     ->screenshot($screenshot_name . '_005_' . time())
//                     // ->click('a[href="http://localhost:8000/logout"]');
//                     // ->assertSeeLink('Log Out')
//                     // ->pause(1000)
//                     ->mouseover('.absolute > div form a')
//                     // ->waitFor('.absolute > div form a')
//                     ->click('.absolute > div form a')
//                     // ->clickAndWaitForReload('.absolute > div form a')
//                     // ->clickLink('Log Out')
//                     ->assertPathIs('/')
//                     ->assertSee('Laravel')
//                     // ->responsiveScreenshots('R_' . $screenshot_name . '_004_' . time());
//                     ->screenshot($screenshot_name . '_006_' . time());

            // login > logout
            // $browser->maximize() // ->resize(768, 1024)
            //         ->visit('/login')
            //         ->typeSlowly('email', $user->email)
            //         ->typeSlowly('password', 'password')
            //         // ->responsiveScreenshots('R_' . $screenshot_name . '_001_' . time())
            //         ->screenshot($screenshot_name . '_001_' . time())
            //         ->storeConsoleLog('Console_001_' . time())
            //         ->storeSource('Src_001_' . time())
            //         ->press('LOG IN')
            //         ->assertPathIs('/dashboard')
            //         ->assertSee('Dashboard')
            //         // ->responsiveScreenshots('R_' . $screenshot_name . '_002_' . time())
            //         ->screenshot($screenshot_name . '_002_' . time())
            //         ->click('.relative button > div')
            //         ->waitForTextIn('.absolute > div form a', 'Log Out')
            //         // ->responsiveScreenshots('R_' . $screenshot_name . '_003_' . time())
            //         ->screenshot($screenshot_name . '_003_' . time())
            //         // ->click('a[href="http://localhost:8000/logout"]');
            //         // ->assertSeeLink('Log Out')
            //         // ->pause(1000)
            //         ->mouseover('.absolute > div form a')
            //         // ->waitFor('.absolute > div form a')
            //         ->click('.absolute > div form a')
            //         // ->clickAndWaitForReload('.absolute > div form a')
            //         // ->clickLink('Log Out')
            //         ->assertPathIs('/')
            //         ->assertSee('Laravel')
            //         // ->responsiveScreenshots('R_' . $screenshot_name . '_004_' . time());
            //         ->screenshot($screenshot_name . '_004_' . time());


            // $browser->maximize() // ->resize(768, 1024)
            //         ->visit('/login')
            //         ->loginAs(User::find(1))
            //         ->visit('/dashboard')
            //         ->assertSee('Dashboard');
        });
    }
}
