<?php namespace TrueMe\Build;


use Composer\Script\Event;

class Process
{
    protected static $name;
    protected static $version;
    protected static $srcPath;
    protected static $desPath;

    protected static $configs;

    public static function override(Event $event)
    {
        if (!self::ini($event->getArguments())) return false;

        var_dump(self::$srcPath);

        echo 'I am override logger laravel lan 4';
    }

    public static function ini($event=null)
    {
        if (!self::$version = @$event[0]) return false;

        self::bootstrap();

        self::$configs = config('log');
        self::$configs = self::$configs[self::$version];

        self::set();

        return true;
    }

    public static function set()
    {
        foreach (self::$configs as $key => $value) {
            self::${$key} = $value;
        }
    }

    public static function bootstrap($value='')
    {
        $GLOBALS['app'] = include __DIR__.'/../App/app.php';
    }
}
