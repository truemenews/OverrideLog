<?php namespace TrueMe\Build;
include __DIR__.'/../Config/Log.php';

use Composer\Script\Event;

class Process
{
    protected $name;
    protected static $version;
    protected $path;
    protected static $configs;

    public static function override(Event $event)
    {
        var_dump($event->getArguments());die;
        if (!self::$version = $version) {
            return false;
        }
        var_dump(self::ini());//die;


        echo 'I am override logger laravel lan 4';
    }

    public static function ini()
    {
        self::$configs = $configs[self::$version];
    }
}
