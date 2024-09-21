<?php

namespace Bubblegum\Candyman;

use Bubblegum\Candyman\Console;

abstract class Command
{
    protected string $info = 'make some fun';
    protected array $argsNames = [];
    abstract public function handle($args): void;

    public function getInfo(): string
    {
        return $this->info;
    }
    public function getArgsNames(): array
    {
        return $this->argsNames;
    }
}