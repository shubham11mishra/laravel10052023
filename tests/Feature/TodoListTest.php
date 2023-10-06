<?php

namespace Tests\Feature;

use App\Models\todolist;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_get_all_todo_list(): void
    {
//        dd(todolist::factory()->definition());
//        todolist::factory()->create();
        $response = $this->getJson(route('todolist.index'));
        $this->assertCount(1, $response->json());
    }
}
