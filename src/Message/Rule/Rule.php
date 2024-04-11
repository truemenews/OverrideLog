<?php namespace TrueMe\Message\Rule;

use TrueMe\Obj\Ini;

class Rule extends Ini
{
    const HIDE = '******';

    protected $collect = ['phone' => Phone::class, 'card' => Card::class];
    protected $func = ['apply'=>['oriMes']];
    protected $props = ['resMes'];

    protected function apply()
    {
        return $this->process();
    }

    public function get()
    {
        foreach ($this->collect as $k => $v)
            $this->collect[$k] = $v::ini();

        return $this->collect;
    }

    public function resMes()
    {
        return $this->resMes = @$this->resMes?: (@$this->oriMes?:null);
    }
}
