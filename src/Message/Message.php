<?php namespace TrueMe\Message;

use TrueMe\Obj\Ini;

class Message extends Ini
{
    protected $oriMes;
    protected $resMes;

    protected $rules;

    public function hide($mes='')
    {
        return 'rule--' . $mes;
    }

    protected function rules()
    {
     // code...
    } 
}
