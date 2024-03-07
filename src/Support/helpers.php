<?php
if (! function_exists('app')) {
    function app()
    {
        return $GLOBALS['app'];
    }
}

if (! function_exists('config')) {
    function config($x)
    {
        return $GLOBALS['app']['config'][$x];
    }
}