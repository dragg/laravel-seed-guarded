<?php

namespace Dragg\LaravelSeedsGuarded\Console;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;

class SeedCommand extends \Illuminate\Database\Console\Seeds\SeedCommand
{
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        if (! $this->confirmToProceed()) {
            return;
        }

        $this->resolver->setDefaultConnection($this->getDatabase());

        $this->getSeeder()->run();
    }
}
