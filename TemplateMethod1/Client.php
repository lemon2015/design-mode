<?php
spl_autoload_register(function($class){
    include $class.'.php';
});

class Client
{
    function __construct()
    {
        $mo = new TmFc();
        $mo->templateMethod();
    }
}

$worker = new Client();