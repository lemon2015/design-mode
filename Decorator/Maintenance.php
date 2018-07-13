<?php
//装饰器参与者
class Maintenance extends Decorator
{
    public function __construct(IComponent $siteNow)
    {
        $this->site = $siteNow;
    }

    //维护Component引用 也可以实现自己的方法
     public function getSite()
     {
        return $this->site->getSite().PHP_EOL.'Maintenance';
     }
     public function getPrice()
     {
        return 900 + $this->site->getPrice();
     }
}