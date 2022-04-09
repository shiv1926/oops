<?php 
Class Vehicle 
{
    public $class_description;
    public $test='Test 1';
    public $test2='test 2';

    function __construct()
    {
        $this->class_description = 'This is the parent class for all classes.';
    }

    public function a()
    {
        echo 'a method from vehicle';
    }

    public function getFormattedList($type)
    {

    }
    
    public function getVehicleDetail($vehicleid)
    {

    }

    public function getText()
    {
        echo 'text page';
    }
}

$obj = new Vehicle();
echo "<pre>";
print_r($obj);
print_r(get_object_vars($obj));
print_r(get_class_methods('Vehicle'));
var_dump($obj);
echo "</pre>";
