<?php
require_once './Creator.php';
require_once './CarProduct.php';

class CarFactory extends Creator
{
  protected function factoryMethod()
  {
      // TODO: Implement factoryMethod() method.
      $carProduct = new CarProduct();
      return $carProduct->getProperties();
  }
}