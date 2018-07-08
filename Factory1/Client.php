<?php
require_once 'CountryFactory.php';
require_once 'CarProduct.php';
require_once 'BikeProduct.php';

class Client
{
    private $countryFactory;

    public function __construct()
    {
        $this->countryFactory = new CountryFactory();
    }

    public function GiveMeACar(){
       return $this->countryFactory->startFactory(new CarProduct());
    }

    public function GiveMeABike(){
        return $this->countryFactory->startFactory(new BikeProduct());
    }
}

$worker = new Client();
echo $worker->GiveMeACar().PHP_EOL;
echo $worker->GiveMeABike().PHP_EOL;