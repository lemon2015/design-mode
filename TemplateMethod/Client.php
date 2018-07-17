<?php
spl_autoload_register(function($class){
    include $class.'.php';
});

class Client
{
    function __construct()
    {
        $caption = "蒙娜丽莎的微笑";
        $mo = new ConcreteClass();
        $mo->templateMethod('http://www.wanhuajing.com/pic/1603/2213/147326/4_640_456.jpg',$caption);
    }
}

$worker = new Client();