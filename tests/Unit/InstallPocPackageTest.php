<?php

namespace Ifirlana\Poc\Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Ifirlana\Poc\Tests\TestCase;

class InstallPocPackageTest extends TestCase
{
    /** @test */
    function the_install_command_copies_the_configuration()
    {
        // make sure we're starting from a clean state
        if (File::exists(config_path('poc.php'))) {
            unlink(config_path('poc.php'));
        }

        $this->assertFalse(File::exists(config_path('poc.php')));

        Artisan::call('poc:install');

        $this->assertTrue(File::exists(config_path('poc.php')));
    }
}