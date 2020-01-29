<?php

namespace Spatie\WebTinker\Console;

use Illuminate\Console\Command;
use Illuminate\Console\DetectsApplicationNamespace;

class InstallCommand extends Command
{
    use DetectsApplicationNamespace;

    protected $signature = 'web-tinker:install';

    protected $description = 'Install all of the Web Tinker resources';

    public function handle()
    {
        $this->comment('Publishing Web Tinker Assets...');

        $this->callSilent('vendor:publish', ['--tag' => 'web-tinker-assets']);

        $this->info('Web tinker installed successfully.');
    }
}
