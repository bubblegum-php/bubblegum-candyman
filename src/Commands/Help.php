<?php

namespace Bubblegum\Commands\BubblegumCandyman;

use Bubblegum\Candyman\Command;
use Bubblegum\Candyman\Console;
use Bubblegum\Candyman\Candyman;

class Help extends Command
{
    protected string $info = 'provide a list of available commands';
    public function handle($args): void
    {
        foreach (Candyman::getCommands() as $name => $commands) {
            $totalInfo = implode(', ', array_map(function ($command) {return $command->getInfo();}, $commands));
            Console::message("$name\t\t\t | $totalInfo.");
        }
    }
}