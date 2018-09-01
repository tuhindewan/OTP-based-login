<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function after_login_user_cannot_access_home_page_until_varified()
    {
    	$user = factory(User::class)->create();

        $this->get('/home')->assertRedirect('/');
    }
}
