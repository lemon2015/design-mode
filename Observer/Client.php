<?php
spl_autoload_register(function($class){
    include $class.'.php';
});

class Client{
    public function __construct()
    {
        $demo = new Event();
        $demo->addObserver(new observer1);
        $demo->addObserver(new observer2);
        $demo->trigger();
        $demo->delObserver(new observer2);
        $demo->trigger();
    }
}

$worker = new Client();