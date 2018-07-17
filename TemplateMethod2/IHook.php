<?php
abstract class IHook
{
    protected $purchased;
    protected $hookSpecial;
    protected $shippingHook;
    protected $fullCost;

    public function templateMethod($total,$special)
    {
        $this->purchased = $total;
        $this->hookSpecial = $special;
        $this->addTax();
        $this->addShippingHook();
        $this->displayCost();
    }

    abstract protected function addTax();
    abstract protected function addShippingHook();
    abstract protected function displayCost();
}