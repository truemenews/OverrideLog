<?php namespace TrueMe\Message\Rule;

use TrueMe\Message\Rule\Rule;

class Card extends Rule
{
    protected function process()
    {
        $this->includeLink();
        
        return $this->resMes;
    }

    public function includeLink()
    {
        $this->resMes = preg_replace('/(card.*){1,20}([a-zA-Z]{4,8})/i', 'Card: ' . self::HIDE, $this->resMes);
    }
}
