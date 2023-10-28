<?php

namespace Inquid\LaravelFacturacom\Commands;

use Illuminate\Console\Command;

class LaravelFacturacomCommand extends Command
{
    public $signature = 'laravel-facturacom';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
