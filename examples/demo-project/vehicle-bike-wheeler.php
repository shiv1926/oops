<?php 
include_once('vehicle-two-wheeler.php');
Class Bike Extends TwoWheelerVehicle
{
    public function getText()
    {
        echo 'text page 2';
    }

    public function __construct()
    {
        vehicle::a();
    }
}

$obj = new Bike();