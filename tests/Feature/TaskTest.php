<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
//    public function test_example(): void
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }
    public function test_user_can_create_task()
    {
        $response = $this->post('/tasks', ['title' => 'Learn TDD']);
        $response->assertRedirect();
        $this->assertDatabaseHas('tasks', ['title' => 'Learn TDD']);
    }
}
