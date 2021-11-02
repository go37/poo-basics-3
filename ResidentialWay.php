<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Vehicle) {
            $this->currentVehicles[] = $vehicle;
        } else {
            return "Unable to drive on the road";
        }
    }
}