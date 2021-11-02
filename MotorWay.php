<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            $this->currentVehicles[] = $vehicle;
        } else {
            return "Unable to drive on the road";
        }
    }
}