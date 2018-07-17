<?php
class TravelCalc extends IHook
{
    protected function addTax()
    {
        $this->fullCost = $this->purchased + ($this->purchased * 0.07);
    }

    protected function addShippingHook()
    {
        if(!$this->hookSpecial)
        {
            $this->fullCost += 120;
        }
    }

    protected function displayCost()
    {
        echo '您的总预算是：'.$this->fullCost.PHP_EOL;
    }
}