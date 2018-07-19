<?php
require_once 'Proxy.php';
class Client implements Proxy
{
    public function getUserName($id)
    {
        // TODO: Implement getUserName() method.
        return Factory::getDataBase('slave')->find($id);
    }
    public function setUserName($id, $newName)
    {
        // TODO: Implement setUserName() method.
        return Factory::getDataBase('master')->data(['name'=>$newName])->where(['id'=>$id]);
    }
}

$worker = new Client();
$worker->getUserName(1);
$worker->setUserName(1,'PM');