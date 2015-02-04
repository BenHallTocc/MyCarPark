<?php

namespace MyCarPark;

/**
 * Description of class
 *
 * @author b.hall
 */
class Stay {
    /**
     * Car Park in which the vehicle is staying.
     * 
     * @var Car Park
     */
    protected $carPark;
    
    /**
     * Vehicle staying.
     * 
     * @var Vehicle 
     */
    protected $vehicle;
    
    /**
     * Time the vehicle entered the car park.
     * 
     * @var DateTime
     */
    protected $entryTime;
      
    /**
     * Time the vehicle is requested to leave the car park by.
     * 
     * @var DateTime
     */
    protected $exitByTime;
    
    /**
     * Constructor for an instance of the 'Stay' class.
     * 
     * @param Vehicle $aVehicle
     */
    function __construct($aCarPark, $aVehicle) {
        $this->carPark = $aCarPark;
        $this->vehicle = $aVehicle;
        $this->entryTime = date('H:i');
        $this->setExitByTime();
    }
    
    /**
     * Returns the value of the objects 'Car Park' property.
     * 
     * @return CarPark
     */
    public function getCarPark() {
        return $this->carPark;
    }
    
    /**
     * Returns the value of the objects 'Vehicle' property.
     * 
     * @return Vehicle
     */
    public function getVehicle() {
        return $this->vehicle;
    }
    
    /**
     * Returns the value of the objects 'Entry Time' property.
     * 
     * @return string
     */
    public function getEntryTime() {
        return $this->entryTime;
    }
    
    /**
     * Returns the value of the objects 'Exit By Time' property.
     * 
     * @return string
     */
    public function getExitByTime() {
        return $this->exitByTime;
    }
    
    /**
     * Sets the value of the objects 'Exit Time' property.
     */
    function setExitByTime() {
        $timeEntered = $this->getEntryTime();
        
        $hourEntered = (int)substr($timeEntered, 0, 2);
        $minuteEntered = substr($timeEntered, 3, 2);

        $maxStay = $this->getCarPark()->getMaxStay();        
        $exitByHour = $hourEntered + $maxStay;
        
        if ($exitByHour > 23) {
            $this->exitByTime = '23:59';
        } else {
            $this->exitByTime = $exitByHour . ':' . $minuteEntered;
        }
    }
}
