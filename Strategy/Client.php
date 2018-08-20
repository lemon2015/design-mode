<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

class Client
{
    private $context;

    public function __construct()
    {
        $this->context = new Context(new AirplaneStrategy);
        $this->context->travel();
        $this->context->setTravelStrategy(new HighSpeedRailStrategy);
        $this->context->travel();
        $this->context->setTravelStrategy(new SelfDrivingStrategy);
        $this->context->travel();
    }
}

$worker = new Client();