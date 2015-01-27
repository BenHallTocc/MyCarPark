<?php

namespace MyCarPark;

/**
 * Description of the 'Car' class.
 *
 * @author b.hall
 */
class Car extends Vehicle implements VehicleInterface {
    /**
     * If no number is supplied, the 'Number of Wheels' property will 
     * be set to '4'.
     * 
     * @param integer $aNumberOfWheels
     */
    public function setNumberOfWheels($aNumberOfWheels) {
        if (is_null($aNumberOfWheels)) {
            $this->numberOfWheels = 4;
        } else {
            $this->numberOfWheels = $aNumberOfWheels;
        }
    }
    
    /**
     * If no number is supplied, the 'Height' property will be set to '140'.
     * 
     * @param integer $aHeight
     */
    public function setHeight($aHeight) {
        if (is_null($aHeight)) {
            $this->height = 140;
        } else {
            $this->height = $aHeight;
        }
    }
}
