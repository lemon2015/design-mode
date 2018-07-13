<?php
//装饰器参与者
class BasicSite extends IComponent
{
    public function __construct()
    {
        $this->site = "Basic site";
    }

    //维护Component引用 也可以实现自己的方法
     public function getSite()
     {
        return $this->site;
     }
     public function getPrice()
     {
        return 1200;
     }
}