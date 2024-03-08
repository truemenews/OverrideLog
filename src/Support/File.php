<?php namespace TrueMe\Support;

class File
{
    protected $name;
    protected $version;
    protected $srcPath;
    protected $desPath;

    protected $configs;
    protected $rootPath;

    protected function copy()
    {
        // code...
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
        $instance = new static;

        return $instance->$method(...$args);
    }
}
