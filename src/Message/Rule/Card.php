<?php namespace TrueMe\Message\Rule;

use TrueMe\Message\Rule\Rule;

class Card extends Rule
{
    protected function process()
    {
        $this->includeCard();

        return $this->resMes;
    }

    protected function includeCard()
    {
        $this->resMes = preg_replace('/(card.*){1,10}([0-9]{4,10})/i', 'Card: ' . self::HIDE, $this->resMes);
    }
}
