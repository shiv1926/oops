<?php
class Test
{
    public $name = 'firstname';
    public function __construct()
    {
        echo 'This is custructor';
    }
}

$obj = new Test;
echo $obj->name;