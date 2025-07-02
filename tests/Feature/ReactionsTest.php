<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ReactionsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_reactions_as_guest(): void
    {
        $response = $this->get('/reactions');

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    
    // public function test_get_reactions_as_logged_in_user(): void
    // {
    //     Auth::login(User::find(1));
    //     $response = $this->get('/reactions');

    //     $response->assertStatus(200);
    // }

}
