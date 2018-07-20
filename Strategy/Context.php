<?php
class Context
{
    private $strategy;

    public function __construct(ITravelStrategy $travel)
    {
        $this->strategy = $travel;
    }

    public function setTravelStrategy(ITravelStrategy $travel){
        $this->strategy = $travel;
    }

    public function travel(){
        return $this->strategy->travelAlgorithm();
    }
}