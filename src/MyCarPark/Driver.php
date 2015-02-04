<?php

namespace MyCarPark;

/**
 * Description of the 'Driver' class.
 *
 * @author b.hall
 */
class Driver extends Person {
    /**
     * Driving License Number.
     * 
     * @var string 
     */
    protected $drivingLicenseNumber; 
    
    /**
     * Constructor for an instance of the 'Driver' class.
     * 
     * @param string $aName
     * @param string $aDrivingLicenseNumber
     */
    function __construct($aName, $aDrivingLicenseNumber) {
        $this->name = $aName;
        $this->drivingLicenseNumber = $aDrivingLicenseNumber;
    }
    
    /**
     * Returns the value of the objects 'Driving License Number' property.
     * 
     * @return string
     */
    public function getDrivingLicenseNumber() {
        return $this->drivingLicenseNumber;
    }
    
    /**
     * Sets the value of the 'Driving License Number' property.
     * 
     * @param string $aDrivingLicenseNumber
     */
    public function setDrivingLicenseNumber($aDrivingLicenseNumber) {
        $this->drivingLicenseNumber = $aDrivingLicenseNumber;
    }
}

