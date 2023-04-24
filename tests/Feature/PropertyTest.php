<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use function Symfony\Component\Translation\t;

class PropertyTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use WithFaker;
    //use RefreshDatabase;
    public function test_logged_user_can_see_propertyPage(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user)
           ->get('/property')
           ->assertStatus(200);
    }


}
