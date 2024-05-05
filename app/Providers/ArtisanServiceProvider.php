<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\ServeCommand;

class ArtisanServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            ServeCommand::class
        ]);
    }
}
