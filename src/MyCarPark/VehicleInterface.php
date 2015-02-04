<?php

namespace MyCarPark;

/**
 * Description of the 'VehicleInterface' interface.
 * 
 * @author b.hall
 */
interface VehicleInterface {
    /**
     * Returns the value of the objects 'Registration Number' property.
     * 
     * @return string
     */
    public function getRegistrationNumber();
    
    /**
     * Sets the value of the objects 'Registration Number' property.
     * 
     * @param string $aRegistrationNumber
     */
    public function setRegistrationNumber($aRegistrationNumber);
    
    /**
     * Returns the value of the objects 'Colour' property.
     * 
     * @return string
     */
    public function getColour();
    
    /**
     * Sets the value of the objects 'Colour' property.
     * 
     * @param string $aColour
     */
    public function setColour($aColour);
    
    /**
     * Returns the value of the objects 'Number of Wheels' property.
     * 
     * @return integer
     */
    public function getNumberOfWheels();
    
    /**
     * Sets the value of the objects 'Number of Wheels' property.
     * 
     * @param integer $aNumberOfWheels
     */
    public function setNumberOfWheels($aNumberOfWheels);
    
    /**
     * Returns the value of the objects 'Height' property.
     * 
     * @return integer
     */
    public function getHeight();
    
    /**
     * Sets the value of the objects 'Height' property.
     * 
     * @param integer $aHeight
     */
    public function setHeight($aHeight);
    
    /**
     * Returns the value of the objects 'Driver' property.
     * 
     * @return Driver
     */
    public function getDriver();
    
    /**
     * Sets the value of the objects 'Driver' property.
     * 
     * @param Driver $aDriver
     */
    public function setDriver($aDriver);
    
    /**
     * Returns the value fo the objects 'Registered Owner' property.
     * 
     * @return RegisteredOwner
     */
    public function getRegisteredOwner();
    
    /**
     * Sets the value of the objects 'Registered Owner' property.
     * 
     * @param RegisteredOwner $aRegisteredOwner
     */
    public function setRegisteredOwner($aRegisteredOwner);
}
