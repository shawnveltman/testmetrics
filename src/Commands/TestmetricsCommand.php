<?php

namespace Shawnveltman\Testmetrics\Commands;

use Illuminate\Console\Command;

class TestmetricsCommand extends Command
{
    public $signature = 'testmetrics';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
