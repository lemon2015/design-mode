<?php
abstract class Creator
{
    protected abstract function factoryMethod();

    public function doFactory()
    {
        return $mfg = $this->factoryMethod();
    }
}