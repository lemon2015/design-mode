<?php
abstract class TmAb
{
    protected $pix;
    protected $cap;

    public function templateMethod()
    {
        $this->addPix($this->pix);
        $this->addCaption($this->cap);
    }
    abstract protected function addPix($pix);
    abstract protected function addCaption($cap);
}