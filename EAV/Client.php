<?php

namespace DesignMode\EAV;

include 'Entity.php';
include 'Attribute.php';
include 'Value.php';

class Client
{
    public function buildMac(){
        $colorAttribute = new Attribute('color');
        $gray = new Value($colorAttribute, 'Gray');

        $memoryAttribute = new Attribute('memory');
        $mem16g = new Value($memoryAttribute, '16GB');

        $diskAttribute = new Attribute('disk');
        $disk512g = new Value($diskAttribute, '512GB');

        $mac = new Entity('MacBook Pro',[$gray, $mem16g, $disk512g]);


        echo $mac;
    }
}

$a = new Client();

$a->buildMac();