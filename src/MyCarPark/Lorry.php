<?php

namespace MyCarPark;

/**
 * Description of the 'Lorry' class.
 *
 * @author b.hall
 */
class Lorry extends Vehicle implements VehicleInterface {
    /**
     * If no number is supplied, the 'numberOfWheels' property will 
     * be set to '12'.
     * 
     * @param integer $aNumberOfWheels
     */
    public function setNumberOfWheels($aNumberOfWheels) {
        if (is_null($aNumberOfWheels)) {
            $this->numberOfWheels = 12;
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
            $this->height = 320;
        } else {
            $this->height = $aHeight;
        }
    }
}

