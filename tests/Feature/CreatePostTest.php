<?php

// namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
// use Tests\TestCase;

// class CreatePostTest extends TestCase
// {
//     /**
//      * A basic feature test example.
//      */
//     public function test_example(): void
//     {
//         $response = $this->get('/post/create');

//         $response->assertStatus(200);
//     }
// }

use Livewire\Livewire;
// namespace Tests\Feature;

test('create post page is accessible', function () {
    Livewire::visit('pages::post.create')
    ->set('title', 'My First Post')
    ->set('content', 'This is the content of my first post.')
    ->call('submit')
    ->assertRedirect('/posts/create');
});