<?php

namespace VirajNikam\Clevertap\Commands;

use Illuminate\Console\Command;

class ClevertapCommand extends Command
{
    public $signature = 'clevertap';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
