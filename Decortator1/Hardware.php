<?php
class Hardware extends Decorator
{
    private $hardwareNow;
    private $box = array(
        'mac'=>'Macintosh',
        'dell'=>'Dell',
        'hp'=>'Hewlett-Packard',
        'lin'=>'Linux'
    );
    public function __construct(IComponent $dateNow)
    {
        $this->date = $dateNow;
    }

    public function getFeature()
    {
        $output = $this->date->getFeature();
        $fmat = PHP_EOL;
        $output .= "$fmat current Hardware: ";
        $output .= $this->hardwareNow;
        return $output;
    }

    public function setFeature($hdw)
    {
        $this->hardwareNow = $this->box[$hdw];
    }

}