<?php
require_once './Creator.php';
require_once './BikeProduct.php';

class BikeFactory extends Creator
{
  protected function factoryMethod()
  {
      // TODO: Implement factoryMethod() method.
      $bikeProduct = new BikeProduct();
      return $bikeProduct->getProperties();
  }
}