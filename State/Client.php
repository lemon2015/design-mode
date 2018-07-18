<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

class Client
{
    private $context;

    public function __construct()
    {
        $this->context = new Context();
        $this->context->turnOnLight();
        $this->context->turnOffLight();
        $this->context->turnBrighter();
        $this->context->turnOffLight();
        $this->context->turnBrightest();
        $this->context->turnOffLight();
    }
}

$worker = new Client();