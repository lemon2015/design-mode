<?php
interface Proxy
{
    public function getUserName($id);
    public function setUserName($id,$newName);
}