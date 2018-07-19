<?php
class Observer1 implements Observer
{
    function update($event_info = null)
    {
        // TODO: Implement update() method.
        echo 'Got it ,update data 123'.PHP_EOL;
    }
}