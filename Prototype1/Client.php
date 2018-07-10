<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});
class Client
{
    private $market;
    private $manage;
    private $engineer;

    public function __construct()
    {
        $this->makeConProto();

        $Tess = clone $this->market;
        $this->setEmployee($Tess,'Tess smith',101,'ts101-1234','tess.png');
        $this->showEmployee($Tess);

        $Tess1 = clone $this->market;
        $this->setEmployee($Tess1,'Tess1 smith',102,'ts102-1234','tess1.png');
        $this->showEmployee($Tess1);

        $Bob = clone $this->manage;
        $this->setEmployee($Bob,'Bob Wen',203,'Bob-1222','bob.png');
        $this->showEmployee($Bob);

        $Mark = clone $this->engineer;
        $this->setEmployee($Mark,'Mark Wang',301,'mark301-1342','mark.png');
        $this->showEmployee($Mark);

    }

    public function makeConProto(){
        $this->market = new Marketing();
        $this->manage = new Management();
        $this->engineer = new Engineering();
    }

    private function showEmployee(IAcmePrototype $employeeNow)
    {
        $px = $employeeNow->getPic();
        echo 'show image'.PHP_EOL;
        echo $employeeNow->getName().PHP_EOL;
        echo $employeeNow->getDept().PHP_EOL;
        echo $employeeNow->getID().PHP_EOL;
    }

    private function setEmployee(IAcmePrototype $employeeNow,$nm,$dp,$id,$px)
    {
        $employeeNow->setName($nm);
        $employeeNow->setDept($dp);
        $employeeNow->setId($id);
        $employeeNow->setPic($px);
    }
}

$worker = new Client();