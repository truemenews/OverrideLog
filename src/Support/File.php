<?php namespace TrueMe\Support;

class File
{
    protected $name;
    protected $version;
    protected $srcPath;
    protected $dstPath;

    protected $configs;
    protected $rootPath;

    protected static $instance;

    protected function copy()
    {
        return copy($this->rootPath.$this->srcPath, $this->rootPath.$this->dstPath);
    }

    protected function ini($configs=[], $rootPath=nul)
    {
        $this->rootPath = $rootPath;
        $this->set($this->configs = $configs);

        return true;
    }

    protected function set()
    {
        foreach ($this->configs as $k => $v) $this->{$k} = $v;
    }

    public static function __callStatic($method, $args)
    {
        self::$instance = self::$instance?: new static;

        return self::$instance->$method(...$args);
    }
}
