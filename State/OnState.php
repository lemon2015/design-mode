<?php
class OnState implements IState
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function turnLightOn()
    {
        // TODO: Implement turnLightOn() method.
        echo 'The light is already on'.PHP_EOL;
    }

    public function turnLightOff()
    {
        // TODO: Implement turnLightOff() method.
        echo 'The light is off'.PHP_EOL;
    }

    public function turnBrighter()
    {
        // TODO: Implement turnBrighter() method.
        echo 'The light is brighter'.PHP_EOL;
        $this->context->setState($this->context->getOffState());
    }

    public function turnBrightest()
    {
        // TODO: Implement turnBrightest() method.
        echo 'The light is brightest'.PHP_EOL;
    }
}