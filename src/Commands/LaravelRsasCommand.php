<?php

namespace Alireeza\LaravelRsas\Commands;

use Illuminate\Console\Command;

class LaravelRsasCommand extends Command
{
    public $signature = 'laravel-rsas';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
