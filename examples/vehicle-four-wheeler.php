<?php 
Class FourWheelerVehicle Extends Vehicle
{
    public $class_description;

    function __construct()
    {
        $this->class_description = 'This is the four wheeler class.';
    }

    public function getFormattedList($type)
    {

    }
    
    public function getVehicleDetail($vehicleid)
    {

    }
}

$obj = new Vehicle();
echo $obj->class_description;