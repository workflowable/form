<?php

namespace Workflowable\Form\Commands;

use Illuminate\Console\Command;

class FormCommand extends Command
{
    public $signature = 'form';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
