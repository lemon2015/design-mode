<?php
abstract class IAcmePrototype
{
    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;

    //Dept
    abstract function setDept($orgCode);
    abstract function getDept();

    //name
    public function setName($emName)
    {
        $this->name = $emName;
    }

    public function getName()
    {
        return $this->name;
    }

    //id
    public function setId($emId)
    {
        $this->id = $emId;
    }

    public function getId()
    {
        return $this->id;
    }

    //picture
    public function setPic($emPic)
    {
        $this->employeePic = $emPic;
    }

    public function getPic()
    {
        return $this->employeePic;
    }

    abstract function __clone();
}