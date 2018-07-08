<?php
require_once './Product.php';

class CarProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        // TODO: Implement getProperties() method.
        return $this->mfgProduct = 'This is a car.';
    }
}