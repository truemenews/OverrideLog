<?php namespace TrueMe\Support;

use TrueMe\Obj\Ini;

class File extends Ini
{
    protected $name;
    protected $version;
    protected $srcPath;
    protected $dstPath;

    protected $configs;
    protected $rootPath;

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
}
