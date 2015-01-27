<?php

namespace MyCarPark;

/**
 * Description of the 'VehicleInterface' interface.
 * 
 * @author b.hall
 */
interface VehicleInterface {
    public function getRegistrationNumber();
    public function setRegistrationNumber($aRegistrationNumber);
    public function getColour();
    public function setColour($aColour);
    public function getNumberOfWheels();
    public function setNumberOfWheels($aNumberOfWheels);
    public function getHeight();
    public function setHeight($aHeight);
    public function getDriver();
    public function setDriver($aDriver);
    public function getRegisteredOwner();
    public function setRegisteredOwner($aRegisteredOwner);
}
