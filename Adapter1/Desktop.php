<?php
/**
 * Created by PhpStorm.
 * User: lemon
 * Date: 2018/7/12
 * Time: 08:12
 */
require_once 'IFormat.php';
class Desktop implements IFormat
{
    private $head = '<!doctype html><html><head>';
    private $headClose = '<meta charset="utf-8">';

    private $cap = '</body></html>';
    private $sampleText;

    public function formatCSS()
    {
        // TODO: Implement formatCSS() method.
        echo $this->head;
        echo "<link rel='stylesheet' href='desktop.css'>";
        echo $this->headClose;
        echo '<h1>Hello,Everyone!</h1>';
    }

    public function formatGraphics()
    {
        // TODO: Implement formatGraphics() method.
        echo '<img class="pixRight" src="pix/fall720.png" width="720" height="480" alt="river">';
    }

    public function horizontalLayout()
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