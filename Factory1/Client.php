<?php
require_once 'BikeFactory.php';
require_once 'CarFactory.php';

class Client
{
    private $bikeOrder;
    private $carOrder;

    public function __construct()
    {
        $this->bikeOrder = new BikeFactory();
        $this->carOrder = new CarFactory();
    }

    public function GiveMeACar(){
       return $this->carOrder->startFactory();
    }

    public function GiveMeABike(){
        return $this->bikeOrder->startFactory();
    }
}

$worker = new Client();
echo $worker->GiveMeACar().PHP_EOL;
echo $worker->GiveMeABike().PHP_EOL;