<?php namespace TrueMe\Message\Rule;

use TrueMe\Message\Rule\Rule;

class Phone extends Rule
{
    protected function process()
    {
        $this->includePhone();

        return $this->resMes;
    }

    protected function includePhone()
    {
        $this->resMes = preg_replace('/(phone.*){1,10}([0-9]{4,10})/i', 'Phone: ' . self::HIDE, $this->resMes);
    }
}
