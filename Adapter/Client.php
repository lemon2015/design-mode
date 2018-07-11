<?php
require_once 'EuroAdapter.php';
require_once 'DollarCalc.php';

class Client
{
    private $requestNow;
    private $dollarRequest;

    public function __construct()
    {
        $this->requestNow = new EuroAdapter();
        $this->dollarRequest = new DollarCalc();
        $euro = '&#8364;';
        echo 'Euros:'.$euro.$this->makeAdapterRequest($this->requestNow).PHP_EOL;
        echo 'Dollars: $'.$this->makeDollarRequest($this->dollarRequest);
    }

    public function makeAdapterRequest(ITarget $req)
    {
        return $req->requestCalc(40,50);
    }

    public function makeDollarRequest(DollarCalc $req)
    {
         return $req->requestCalc(40,50);
    }
}

$work = new Client();