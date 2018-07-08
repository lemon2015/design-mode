<?php
require_once './Creator.php';
require_once './Product.php';

class CountryFactory extends Creator
{
    private $country;

    protected function factoryMethod(Product $product)
    {
      // TODO: Implement factoryMethod() method.
      $this->country = $product;
      return $this->country->getProperties();
    }
}