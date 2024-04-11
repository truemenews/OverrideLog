<?php namespace TrueMe\Message;

use TrueMe\Obj\Ini;
use TrueMe\Message\Rule\Rule;

class Message extends Ini
{
    protected $resMes;

    protected $props = ['rules'];
    protected $func = ['hide'=>['oriMes']];

    protected function hide()
    {
        foreach ($this->rules as $rule)
            $this->resMes = $rule->apply($this->resMes?:$this->oriMes);

        return $this->resMes;
    }

    protected function rules()
    {
        return $this->rules = Rule::ini()->get();
    }
}
