<?php
class GraphicFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new TextProduct();
        return $product->getProperties;
    }
}