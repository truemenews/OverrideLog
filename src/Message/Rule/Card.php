<?php namespace TrueMe\Message\Rule;

use TrueMe\Message\Rule\Rule;

class Card extends Rule
{
    protected function process()
    {
        $this->includePhone();

        return $this->resMes;
    }

    protected function includePhone()
    {
        $this->resMes = preg_replace('/(card.*){1,10}([0-9]{4,10})/i', 'Card: ' . self::HIDE, $this->resMes);
    }
}
