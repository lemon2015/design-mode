<?php
require_once 'IPrototype.php';
class MaleProto extends IPrototype
{
    const GENDER = 'MAIL';
    public $mated;

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