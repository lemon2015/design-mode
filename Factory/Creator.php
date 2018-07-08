<?php
abstract class Creator
{
  protected abstract function factoryMethod();

  public function startFactory()
  {
      //return production
      return $mfg = $this->factoryMethod();
  }
}