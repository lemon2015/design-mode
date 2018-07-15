<?php
class Food extends Decorator
{
    private $chowNow;
    private $snacks = array(
        'piz'=>'Pizza',
        'burg'=>'Burgers',
        'nach'=>'Nachos',
        'veg'=>'Veggies'
    );
    public function __construct(IComponent $dateNow)
    {
        $this->date = $dateNow;
    }

    public function getFeature()
    {
        $output = $this->date->getFeature();
        $fmat = PHP_EOL;
        $output .= "$fmat Favorite food: ";
        $output .= $this->chowNow;
        return $output;
    }

    public function setFeature($yum)
    {
        $this->chowNow = $this->snacks[$yum];
    }

}