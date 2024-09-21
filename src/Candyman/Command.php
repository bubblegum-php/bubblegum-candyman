<?php

namespace Bubblegum\Candyman;

use Bubblegum\Candyman\Console;

abstract class Command
{
    protected string $info = 'make some fun';
    abstract public function handle($args): void;

    public function getInfo(): string
    {
        return $this->info;
    }
}