<?php
class GraphicProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
       return $this->mfgProduct = "<img src='http://www.wanhuajing.com/pic/1603/2213/147326/4_640_456.jpg'>";
    }
}