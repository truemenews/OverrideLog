<?php namespace TrueMe\Build;

use Composer\Script\Event;
use TrueMe\Support\File;

class Process
{
    protected static $vendorDir;
    protected static $event;
    protected static $configs;
    protected static $version;

    public static function override(Event $event)
    {
        self::$event = $event;

        if (!self::ini()) return false;

        return File::copy();
    }

    public static function ini()
    {
        $event = self::$event->getArguments();
        if (!self::$version = @$event[0]) return false;

        self::$vendorDir = self::$event->getComposer()->getConfig()->get('vendor-dir');

        self::bootstrap();

        self::$configs = config('log');
        self::$configs = self::$configs[self::$version];

        File::init(self::$configs, self::$vendorDir);

        return true;
    }

    public static function bootstrap($value='')
    {
        $GLOBALS['app'] = include __DIR__.'/../App/app.php';
    }
}
