<?php namespace TrueMe\Obj;

class Ini
{
    protected static $instance;

    protected function ini()
    {
        return self::$instance;
    }

    public static function __callStatic($method, $args)
    {
        self::$instance = self::$instance?: new static;

        return self::$instance->$method(...$args);
    }
}
