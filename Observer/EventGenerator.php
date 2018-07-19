<?php
//定义一个事件产生者
abstract class EventGenerator{
    protected $observers = array();
    public function addObserver(Observer $observer){
        $this->observers[] = $observer;
    }
    public function notify(){
        foreach($this->observers as $observer){
            $observer->update();
        }
    }
}