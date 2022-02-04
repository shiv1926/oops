<?php
class parentclass
{
    public function __construct()
    {
        echo 'constructor function of parent';
    }

    public function first()
    {
        echo 'function first from parent class';
    }
}

class childclass extends parentclass
{
    
    public function __construct()
    {
        echo 'constructor function of child';
    }

    public function first()
    {
        echo 'function first in child class';
    }
}

$obj = new childclass();
$obj->first();