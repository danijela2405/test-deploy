<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegistrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_guest_can_register(): void
    {
        $response = $this->post('/register',
    [
            'name'=>'neko ime',
            'email'=>'email123@email.com',
            'password'=>'password',
        ]);

        $user = User::where('email', 'email123@email.com')->first();

        $this->assertNotNull( $user);
        $this->assertSame('neko ime', $user->name);

        $response->assertStatus(302);
        $response->assertRedirect('/users');

    }
}
