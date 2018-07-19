<?php
class Observer2 implements Observer
{
    function update($event_info = null)
    {
        // TODO: Implement update() method.
        echo 'Got it ,update data 456'.PHP_EOL;
    }
}