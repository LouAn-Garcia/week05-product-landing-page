<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CafeExperienceTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_is_available(): void
    {
        $this->seed();

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Neko Wave')
            ->assertSee('Meet the resident cats');
    }

    public function test_guest_can_request_a_reservation(): void
    {
        $response = $this->post(route('reservations.store'), [
            'guest_name' => 'Ari Flores',
            'email' => 'ari@example.test',
            'phone' => '0917-555-0123',
            'visit_date' => now()->addDay()->toDateString(),
            'visit_time' => '13:30',
            'party_size' => 2,
            'occasion' => 'A quiet catch-up',
            'notes' => 'Near a window, if possible.',
        ]);

        $response->assertRedirect(route('reservations.create'));
        $this->assertDatabaseHas('reservations', ['guest_name' => 'Ari Flores', 'status' => 'pending']);
    }

    public function test_contact_message_requires_a_subject(): void
    {
        $this->post(route('contact.store'), [
            'name' => 'Ari Flores',
            'email' => 'ari@example.test',
            'message' => 'Hello!',
        ])->assertSessionHasErrors('subject');
    }
}
