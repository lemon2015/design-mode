<?php
require_once 'IPrototype.php';
class FemaleProto extends IPrototype
{
    const GENDER = 'FEMALE';
    public $fecundity;

    public function __construct()
    {
        $this->eyeColor = 'red';
        $this->wingBeat = '220';
        $this->unitEyes = '760';
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}