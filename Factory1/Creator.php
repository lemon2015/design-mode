<?php
abstract class Creator
{
    protected abstract function factoryMethod(Product $product);

    public function startFactory($newProduct)
    {
        //return production
        return $mfg = $this->factoryMethod($newProduct);
    }
}