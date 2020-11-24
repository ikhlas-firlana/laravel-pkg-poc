<?php


namespace Ifirlana\Poc\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Ifirlana\Poc\Tests\TestCase;
use Ifirlana\Poc\Models\Poc;

class PostTest extends TestCase {
  use RefreshDatabase;

  public function setUp(): void {
    parent::setUp();
    // additional setup
  }

  /** @test */
  function a_poc_has_a_title() {
    $post = $this->factory(Poc::class)->create(['title' => 'Fake Title']);
    $this->assertEquals('Fake Title', $post->title);
  }

  /** @test */
  function a_post_has_a_body() {
    $post = factory(Post::class)->create(['title' => 'Fake Body']);
    $this->assertEquals('Fake Title', $post->body);
  }

  /** @test */
  function a_post_has_an_author_id() {
    // Note that we are not assuming relations here, just that we have a column to store the 'id' of the author
    $post = factory(Post::class)->create(['author_id' => 999]); // we choose an off-limits value for the author_id so it is unlikely to collide with another author_id in our tests
    $this->assertEquals(999, $post->author_id);
  }
}