<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    
    function it_loads_the_user_list_page()
    {
        $this->get('/usuarios')
            ->assertStatus(200);
    }

    /** @test */
    function it_displays_a_404_error_if_the_user_is_not_found()
    {
        $this->get('/usuarios/999')
             ->assertStatus(404)
             ->assertSee('Usuario no encontrado');
    }
    /** @test */
    function it_shows_a_default_message_if_users_list_is_empty()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados');
    }

    /** @test */
    function it_loads_the_user_detail_page(){
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Ver los destalles del usuario: 5');
    }

    /** @test */
    function it_fails_the_user_edit_page_with_wrong_id(){
        $this->get('/usuarios/texto/edit')
            ->assertStatus(404);
    }
}
