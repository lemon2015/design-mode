<?php
class OffState implements IState
{
    private $context;

    public function __construct(Context $contextNow)
    {
        $this->context = $contextNow;
    }

    public function turnLightOn()
    {
        // TODO: Implement turnLightOn() method.
        echo 'The light is on, I can see.'.PHP_EOL;
        $this->context->setState($this->context->getOnState());
    }

    public function turnLightOff()
    {
        // TODO: Implement turnLightOff() method.
        echo 'The light is already off'.PHP_EOL;
    }
    public function turnBrighter()
    {
        // TODO: Implement turnBrighter() method.
        echo 'The light is brighter1'.PHP_EOL;
    }

    public function turnBrightest()
    {
        // TODO: Implement turnBrightest() method.
        echo 'The light is brightest1'.PHP_EOL;
    }
}