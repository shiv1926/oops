<?php 
include_once('vehicle.php');
Class TwoWheelerVehicle Extends Vehicle
{
    public $class_description;

    public function getFormattedList($type)
    {

    }

    public function a()
    {
        echo 'child a method';
    }

    public function getVehicleDetail($vehicleid)
    {

    }

    public function getText()
    {
        echo 'text page 1';
    }

}

$obj = new TwoWheelerVehicle();
echo $obj->a();