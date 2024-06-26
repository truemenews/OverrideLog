<?php namespace TrueMe\Obj;

class Ini
{
    private static $instance;
    private static $instanceArr=[];

    private function ini()
    {
        return self::$instance;
    }

    public static function __callStatic($method, $args)
    {
        $isExistObj = array_key_exists(get_class($new = new static), self::$instanceArr);
        self::$instance = $isExistObj ? self::$instanceArr[get_class($new)] : $new;

        if (!$isExistObj) self::$instanceArr[get_class($new)] = self::$instance;

        return self::$instance->$method(...$args);
    }

    public function __call($name, $arguments)
    {
        if (array_key_exists($name, $this->func)) {
            foreach ($this->func[$name] as $v)
                $this->{$v} = array_shift($arguments);

            return $this->{$name}();
        }
    }

    public function __get($name)
    {
        if (in_array($name, $this->props))
          return $this->{$name} = @$this->{$name}?: $this->$name();
    }
}
