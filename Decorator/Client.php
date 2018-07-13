<?php
spl_autoload_register(function($class_name){
    include $class_name.'.php';
});
class Client
{
    private $basicSite;

    public function __construct()
    {
        $this->basicSite = new BasicSite();
        $this->basicSite = $this->wrapComponent($this->basicSite);

        $sitShow = $this->basicSite->getSite();
        $price = $this->basicSite->getPrice();
        echo $sitShow.' Price is '.$price.PHP_EOL;
    }

    public function wrapComponent(IComponent $component)
    {
        $component = new Maintenance($component);
        //$component = new Video($component);
        //$component = new DataBase($component);
        return $component;
    }
}

$worker = new Client();