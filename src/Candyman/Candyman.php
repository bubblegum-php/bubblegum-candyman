<?php

namespace Bubblegum\Candyman;

use Bubblegum\Exceptions\CommandException;

class Candyman
{
    protected static array $commands = [];

    public static function registerCommand(string $name, string $commandClass): void
    {
        $command = new $commandClass();
        if (array_key_exists($name, static::$commands)) {
            static::$commands[$name][] = $command;
        }
        static::$commands[$name] = [$command];
    }

    public static function executeCommand(string $name, ...$args): void
    {
        if (!array_key_exists($name, static::$commands)) {
            Console::error("Command not found for '$name'.");
        }
        try {
            foreach (static::$commands[$name] as $command) {
                $command->handle($args);
            }
        } catch (CommandException $e) {
            Console::error($e->getMessage());
        }
    }

    public static function getCommands(): array
    {
        return static::$commands;
    }
}