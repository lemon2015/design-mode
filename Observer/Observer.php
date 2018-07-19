<?php
//定义一个观察者接口
interface Observer{
    function update($event_info = null);
}