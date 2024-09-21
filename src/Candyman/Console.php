<?php

namespace Bubblegum\Candyman;

class Console
{
    protected static function color(int $color)
    {
        return "\033[{$color}m";
    }
    public static function message(string $message, string $label='candyman', int $color=95): void
    {
        echo static::color($color) . $label . static::color(0) . ' ' . $message . PHP_EOL;
    }

    public static function info(string $message): void
    {
        static::message($message, 'info', 93);
    }

    public static function error(string $message): void
    {
        static::message($message, 'error', 91);
    }

    public static function ok(string $message): void
    {
        static::message($message, 'ok', 92);
    }
    public static function done(string $message): void
    {
        static::message($message, 'done', 32);
    }
    public static function warning(string $message): void
    {
        static::message($message, 'warning', 33);
    }
}