<?php

namespace Ifirlana\Poc\Tests;

use Ifirlana\Poc\PocServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase {
  public function setUp(): void {
    parent::setUp();
    // additional setup
  }

  protected function getPackageProviders($app) {
    return [
      PocServiceProvider::class,
    ];
  }

  protected function getEnvironmentSetUp($app) {
    // perform environment setup
        // import the CreatePostsTable class from the migration
    include_once __DIR__ . '/../database/migrations/create_poc_table.php.stub';

    // run the up() method of that migration class
    (new \CreatePocTable)->up();
  }
}