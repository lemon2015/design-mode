<?php
spl_autoload_register(function($class){
    include $class.'.php';
});

class Client
{
    private $buyTotal;
    private $gpsNow;
    private $mapNow;
    private $boatNow;
    private $special;
    private $travelCalc;

    public function __construct()
    {
        $this->setValue();
        $this->setCost();
        $this->travelCalc = new TravelCalc();
        $this->travelCalc->templateMethod($this->buyTotal,$this->special);
    }

    private function setValue()
    {
        $this->gpsNow = 50;
        $this->mapNow = array(10,20,30);
        $this->boatNow = 120;
    }

    private function setCost()
    {
        $this->buyTotal = $this->gpsNow;
        foreach ($this->mapNow as $value)
        {
            $this->buyTotal+=$value;
        }
        $this->special = ($this->buyTotal >= 200);
        $this->buyTotal += $this->boatNow;
    }
}
$worker = new Client();