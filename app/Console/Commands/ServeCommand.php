<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ServeCommand extends Command
{
    protected $signature = 'serve';
    protected $description = 'Serve the application on the PHP development server';

    public function handle()
    {
        $this->info("Lumen development server started on http://localhost:8000/");
        passthru('php -S localhost:8000 -t public');
    }
}
