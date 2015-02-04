<?php

namespace MyCarPark;

/**
 * Description of the 'Motorbike' class.
 *
 * @author b.hall
 */
class Motorbike extends Vehicle implements VehicleInterface {
    /**
     * If no number is supplied, the 'numberOfWheels' property will 
     * be set to '2'.
     * 
     * @param integer $aNumberOfWheels
     */
    public function setNumberOfWheels($aNumberOfWheels) {
        if (is_null($aNumberOfWheels)) {
            $this->numberOfWheels = 2;
        } else {
            $this->numberOfWheels = $aNumberOfWheels;
        }
    }
    
    /**
     * If no number is supplied, the 'Height' property will be set to '90'.
     * 
     * @param integer $aHeight
     */
    public function setHeight($aHeight) {
        if (is_null($aHeight)) {
            $this->height = 90;
        } else {
            $this->height = $aHeight;
        }
    }
}

