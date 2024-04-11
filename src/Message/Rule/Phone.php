<?php namespace TrueMe\Message\Rule;

use TrueMe\Message\Rule\Rule;

class Phone extends Rule
{
    protected function process()
    {
        $this->includeCode();

        return $this->resMes;
    }

    protected function includeCode()
    {
        $this->resMes = preg_replace('/(phone.*){1,20}([0-9]{4,10})/i', 'Phone: ' . self::HIDE, $this->resMes);
    }
}
