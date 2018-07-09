<?php
require_once 'autoload.php';

class Client
{
    //直接实例化
    private $fly1;
    private $fly2;

    //克隆
    private $c1Fly;
    private $c2Fly;
    private $updateCloneFly;

    public function __construct()
    {
        //实例化
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();

        //克隆
        $this->c1Fly = clone $this->fly1;
        $this->c2Fly = clone $this->fly2;
        $this->updateCloneFly = clone $this->fly2;

        //更新克隆
        $this->c1Fly->mated = 'true';
        $this->c2Fly->fecundity = '186';
        $this->updateCloneFly->eyeColor = 'purple';
        $this->updateCloneFly->wingBeat = '220';
        $this->updateCloneFly->unitEyes = '750';
        $this->updateCloneFly->fecundity = '92';

        //发送
        $this->showFly($this->c1Fly);
        $this->showFly($this->c2Fly);
        $this->showFly($this->updateCloneFly);
    }

    private function showFly(IPrototype $fly)
    {
        echo "Eye color is : ".$fly->eyeColor.PHP_EOL;
        echo "wing Beats/second is : ".$fly->wingBeat.PHP_EOL;
        echo "Eye units is : ".$fly->unitEyes.PHP_EOL;
        $genderNow = $fly::GENDER;
        echo "Gender is :".$genderNow.PHP_EOL;
        if($genderNow == 'FEMALE'){
            echo "Mumber of eggs :".$fly->fecundity.PHP_EOL;
        }else{
            echo "Mated : ".$fly->mated.PHP_EOL;
        }
    }

}

$worker = new Client();