<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersWellcomeTest extends TestCase
{
    /** @test */
    function it_wellcomes_users_with_nickname()
    {
        $this->get('/saludo/ana/manosfrias')
            ->assertStatus(200)
            ->assertSee('Bienvenido Ana, tu apodo es Manosfrias');
    }

    /** @test */
    function it_wellcomes_users_without_nickname()
    {
        $this->get('/saludo/ana')
            ->assertStatus(200)
            ->assertSee('Bienvenido Ana');
    }
}
