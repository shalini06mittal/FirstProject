<?php

namespace Tests\Unit;
use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicTest extends TestCase
{
   // use RefreshDatabase;
    protected $first;
    protected $second, $post;
    public function setUp()
    {
        Parent::setUp();
        $this->artisan('migrate:refresh');
         $this->seed();
        $this->first = factory(\App\Post::class)->create([
            'title'=>'This is title',
            'content'=>'Post First Content'
        ]);
        $this->second = factory(\App\Post::class)->create([
            'created_at'=>\Carbon\Carbon::now()->subMonth(),
            'title'=>'This is title 2',
            'content'=>'Post Second Content'
        ]);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPostInstanceExists()
    {
        $posts = Post::all();
        //dd($posts);
        $this->assertCount(2,$posts);  
    }
    public function testAddPost()
    {
        $post = new Post();
        $post->title = 'New Title';
        $post->content = 'New Content';
        $post->user_id = 1;
        $post->save();

        $this->assertCount(3,Post::all());

        $post = Post::find(3);
        $this->assertEquals($post->title,'New Title');
    }
    public function testDeletePost()
    {
        $this->first->delete();
        $this->assertDatabaseMissing('posts', ['title' => 'This is title']);
    }
    public function testFindAPost()
    {       
        $post = Post::find(1);
        $this->assertEquals($post->title,'This is title');
        $this->assertDatabaseHas('posts', [
            'title' => 'This is title'
        ]);
    }
}
