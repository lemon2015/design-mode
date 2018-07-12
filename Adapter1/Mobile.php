<?php
/**
 * Created by PhpStorm.
 * User: lemon
 * Date: 2018/7/12
 * Time: 08:12
 */
require_once 'IMobileFormat.php';
class Mobile implements IMobileFormat
{
    private $head = '<!doctype html><html><head>';
    private $headClose = '<meta charset="utf-8">';

    private $cap = '</body></html>';
    private $sampleText;

    public function formatCSS()
    {
        // TODO: Implement formatCSS() method.
        echo $this->head;
        echo "<link rel='stylesheet' href='mobile.css'>";
        echo $this->headClose;
        echo '<h1>Hello,Everyone!</h1>';
    }

    public function formatGraphics()
    {
        // TODO: Implement formatGraphics() method.
        echo '<img class="pixRight" src="pix/fall960.png" width="960" height="480" alt="river">';
    }

    public function verticalLayout()
    {
        // TODO: Implement formatLayout() method.
        $textFile = 'lorem.txt';
        $openText = fopen($textFile,'r');
        $textInfo = fread($openText,filesize($textFile));
        fclose($openText);
        $this->sampleText = $textInfo;
        echo '<div>'.$this->sampleText.'</div>';
        echo '<p><div>'.$this->sampleText.'</div>';
    }

    public function closeHTML()
    {
        echo $this->cap;
    }
}