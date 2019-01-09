<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
class TestPostCOntroller extends TestCase
{
    // protected $first;
    // protected $second, $post;
    // public function setUp()
    // {
    //     Parent::setUp();
    //     $this->artisan('migrate:refresh');
    //      $this->seed();
    //     $this->first = factory(\App\Post::class)->create([
    //         'title'=>'This is title',
    //         'content'=>'BLa Vla'
    //     ]);
    //     $this->second = factory(\App\Post::class)->create([
    //         'created_at'=>\Carbon\Carbon::now()->subMonth(),
    //         'title'=>'This is title 2',
    //         'content'=>'Post Second Content'
    //     ]);
    //     $this->post = factory(\App\Post::class)->make([
    //         'title'=>'Test Ttile',
    //         'content'=>'Test COntent'
    //     ]);
    // }

    /**
     * A basic test example.
     *
     * @return void
     */

    public function testExample()
    {
        //dd($this->post->user);
       //$resp =  $this->get('posts');//->assertStatus(200);
       //dd($this->post->user_id);
       /*
       The first test we will create is a test that tries to create a post without an authentication token. 
       It will act as if a user who is not logged in tries to create a post. 
       For this test to pass, the test must return a 401 Unauthenticated HTTP code and 
       will not create a new post. If this test fails, it means an unauthenticated user can create a product on this application. 
       We will know what to fix right away. Insert the code below into the ProductTest class*/
       //$response = $this->json('POST', '/posts', ['title'=>$this->post->title,'content'=>$this->post->content,'id'=>$this->post->user_id]);
   //    $user = factory(\App\User::class)->create();
    //    $response = $this->actingAs($this->post->user)
    //    ->json('POST', '/posts', ['title'=>$this->post->title,'content'=>$this->post->content,'id'=>$this->post->user_id]);

    //     $response
    //         ->assertStatus(302);
    //         $response->assertRedirect('posts');
        
            $response = $this->json('GET', '/posts');
            $response->assertStatus(200);
            
            $response->assertViewHas('posts');
            //dd($response->getContent());
            // $response->assertJsonStructure(
            //     [
            //         [
            //                 'id',
            //                 'title',
            //                 'content',
            //                 'user_id',
            //                 'created_at',
            //                 'updated_at'
            //         ]
            //     ]
            // );
        
    }
}
