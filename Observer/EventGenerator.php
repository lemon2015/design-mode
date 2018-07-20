<?php
//定义一个事件产生者
abstract class EventGenerator{
    protected $observers = array();
    public function addObserver(Observer $observer){
        $this->observers[] = $observer;
    }
    public function delObserver(Observer $observer){
        foreach($this->observers as $k=>$v){
            if($v == $observer){
                unset($this->observers[$k]);
                echo 'detach obj success'.PHP_EOL;
                break;
            }
        }
    }
    public function notify(){
        foreach($this->observers as $observer){
            $observer->update();
        }
    }
}