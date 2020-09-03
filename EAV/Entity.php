<?php

namespace DesignMode\EAV;


class Entity
{
    private $name;
    private $values;

    public function __construct(string $name, array $values)
    {
        $this->name = $name;
        $this->values = new \SplObjectStorage();

        foreach ($values as $value){
            $this->values->attach($value);
        }
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        $text = [$this->name];

        foreach ($this->values as $value){
            $text[] = (string) $value;
        }

        return join(', ',$text);
    }
}