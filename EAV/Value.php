<?php

namespace DesignMode\EAV;

class Value
{
    private $name;
    private $attribute;

    public function __construct(Attribute $attribute, string $name)
    {
        $this->name = $name;
        $this->attribute = $attribute;

        $attribute->addValue($this);
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return sprintf('%s: %s',$this->attribute, $this->name);
    }
}