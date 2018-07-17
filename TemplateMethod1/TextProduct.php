<?php
class TextProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
       return $this->mfgProduct = '<em>Caption:</em>蒙娜丽莎的微笑<br>';
    }
}