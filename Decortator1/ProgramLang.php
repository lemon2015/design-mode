<?php
class ProgramLang extends Decorator
{
    private $languageNow;
    private $language = array(
        'php'=>'PHP',
        'cs'=>'c#',
        'js'=>'JavaScript',
        'go'=>'Go'
    );

    public function __construct(IComponent $dateNow)
    {
        $this->date = $dateNow;
    }

    public function getFeature()
    {
        $output = $this->date->getFeature();
        $fmat = PHP_EOL;
        $output .= "$fmat Preferred programing language: ";
        $output .= $this->languageNow;
        return $output;
    }

    public function setFeature($lan)
    {
        $this->languageNow = $this->language[$lan];
    }

}