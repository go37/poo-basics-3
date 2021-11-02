<?php

require_once 'Vehicle.php';

require_once "Car.php";
require_once "Bicycle.php";
require_once 'Skateboard.php';
require_once 'Truck.php';

require_once 'MotorWay.php';

require_once 'HighWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$motorway =  new MotorWay(4, 130);
$pedestrian = new PedestrianWay(1, 10);
$residential = new ResidentialWay(2, 50);

$bicycle = new Bicycle();
$car = new Car();
$skateboard = new Skateboard();
$truck = new Truck();

$motorway->addVehicle($bicycle);
$motorway->addVehicle($car);
$motorway->addVehicle($skateboard);
$motorway->addVehicle($truck);
var_dump($motorway);

$residential->addVehicle($bicycle);  
$residential->addVehicle($car);
$residential->addVehicle($skateboard);  
$residential->addVehicle($truck);  
var_dump($residential);

$pedestrian->addVehicle($bicycle);
$pedestrian->addVehicle($car);
$pedestrian->addVehicle($skateboard);
$pedestrian->addVehicle($truck);
var_dump($pedestrian);
