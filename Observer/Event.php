<?php
//class trigger
class Event extends EventGenerator{
    function trigger(){
        echo 'trigger event'.PHP_EOL;
        //通知观察者
        $this->notify();
    }
}