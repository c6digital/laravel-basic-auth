<?php

namespace C6Digital\LaravelBasicAuth\Commands;

use Illuminate\Console\Command;

class LaravelBasicAuthCommand extends Command
{
    public $signature = 'laravel-basic-auth';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
