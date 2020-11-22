<?php

namespace Ifirlana\Poc\Console;

use Illuminate\Console\Command;

class InstallPocPackage extends Command
{
    protected $signature = 'poc:install';

    protected $description = 'Install the PocPackage';

    public function handle()
    {
        $this->info('Installing PocPackage...');

        $this->info('Publishing configuration...');

        $this->call('vendor:publish', [
            '--provider' => "Ifirlana\Poc\PocServiceProvider",
            '--tag' => "config"
        ]);

        $this->info('Installed PocPackage');
    }
}