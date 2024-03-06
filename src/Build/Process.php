<?php
include __DIR__.'/../Config/Log.php';

namespace TrueMe\Build;

class Process
{
    protected $name;
    protected static $version;
    protected $path;
    protected static $configs;

    public static function override($version=null)
    {
        if (!self::$version = $version) {
            return false;
        }

        var_dump(self::ini());die;


        echo 'I am override logger laravel lan 4';
    }

    public static function ini()
    {
        self::$configs = $configs[self::$version];
    }
}
