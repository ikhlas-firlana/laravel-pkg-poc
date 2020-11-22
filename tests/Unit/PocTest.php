<?php


namespace Ifirlana\Poc\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Ifirlana\Poc\Tests\TestCase;
use Ifirlana\Poc\Models\Poc;

class PostTest extends TestCase {
  use RefreshDatabase;

  /** @test */
  function a_poc_has_a_title() {
    $post = factory(Poc::class)->create(['title' => 'Fake Title']);
    $this->assertEquals('Fake Title', $post->title);
  }
}