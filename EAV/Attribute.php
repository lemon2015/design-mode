<?php

namespace DesignMode\EAV;

class Attribute
{
    private $name;
    private $values;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->values = new \SplObjectStorage();
    }

    public function addValue(Value $value)
    {
        $this->values->attach($value);
    }

    public function getValues(): \SplObjectStorage
    {
        return $this->values;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->name;
    }
}