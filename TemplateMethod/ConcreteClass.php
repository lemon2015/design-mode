<?php
include_once 'AbstractClass.php';
class ConcreteClass extends TmAb
{
    protected function addPix($pix)
    {
        // TODO: Implement addPix() method.
        $this->pix = $pix;
        $this->pix = 'pix/'.$this->pix;
        $formatter = "<img src=$this->pix><br>".PHP_EOL;
        echo $formatter;
    }

    protected function addCaption($cap)
    {
        // TODO: Implement addCaption() method.
        $this->cap = $cap;
        echo "<em>Caption:</em>".$this->cap."<br>".PHP_EOL;
    }
}