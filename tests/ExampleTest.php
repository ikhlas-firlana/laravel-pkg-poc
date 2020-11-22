<?php

namespace Ifirlana\Poc\Tests;

use Orchestra\Testbench\TestCase;
use Ifirlana\Poc\PocServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PocServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
