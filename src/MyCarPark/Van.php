<?php

namespace MyCarPark;

/**
 * Description of the 'Van' class.
 *
 * @author b.hall
 */
class Van extends Vehicle implements VehicleInterface {
    /**
     * Overrides the 'setNumberOfWheels()' method from the 'Vehicle' class.
     * If no number is supplied, the 'numberOfWheels' property will 
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
     * If no number is supplied, the 'Height' property will be set to '160'.
     * 
     * @param integer $aHeight
     */
    public function setHeight($aHeight) {
        if (is_null($aHeight)) {
            $this->height = 160;
        } else {
            $this->height = $aHeight;
        }
    }
}
