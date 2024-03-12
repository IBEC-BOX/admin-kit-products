<?php

namespace AdminKit\Products\Commands;

use Illuminate\Console\Command;

class ProductsCommand extends Command
{
    public $signature = 'admin-kit-products';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
