<?php
require_once 'EuroCalc.php';
require_once 'ITarget.php';
class EuroAdapter extends EuroCalc implements ITarget
{
    public function __construct()
    {
    }

    function requester()
    {
        // TODO: Implement requester() method.
        return $this->rate = .8111;
    }
}