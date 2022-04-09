<?php 
Class dbConnection
{
    private $class_description;

    function __construct()
    {
        $this->class_description = 'This is the parent class for all classes.';
    }
}

$obj = new Vehicle();
echo $obj->class_description;
?>