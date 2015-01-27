<?php

namespace MyCarPark;

/**
 * Description of the 'Vehicle' abstract class.
 *
 * @author b.hall
 */
abstract class Vehicle {
    /**
     * Registration Number.
     * 
     * @var string 
     */
    protected $registrationNumber;
    
    /**
     * Colour of the vehicle.
     * 
     * @var string
     */
    protected $colour;
    
    /**
     * The vehicle's number of wheels.
     * 
     * @var integer
     */
    protected $numberOfWheels;
    
    /**
     * Height of the vehicle in centimetres (cm).
     * 
     * @var integer
     */
    protected $height;
    
    /**
     * 'Driver' object linked to vehicle.
     * 
     * @var Driver 
     */
    protected $driver;
    
    /**
     * 'Registered Owner' object linked to vehicle.
     * 
     * @var RegisteredOwner
     */
    protected $registeredOwner;
    
    /**
     * Constructor for an instance of the 'Vehicle' class.
     * 
     * @param string $aRegistrationNumber
     * @param string $aColour
     * @param integer $aNumberOfWheels
     * @param integer $aHeight
     */
    function __construct ($aRegistrationNumber, $aColour, $aNumberOfWheels, 
                                        $aHeight, $aDriver, $aRegisteredOwner) {
        if (is_null($aRegistrationNumber) || is_null($aColour)) {
            trigger_error('Registration Number and a colour are required');
        } else {
            $this->registrationNumber = $aRegistrationNumber;
            $this->colour = $aColour;
            $this->setNumberOfWheels($aNumberOfWheels);
            $this->setHeight($aHeight);
            $this->driver = $aDriver;
            $this->registeredOwner = $aRegisteredOwner;
        }
    }
    
    /**
     * Returns the value of the objects 'Registration Number' property.
     * 
     * @return string
     */
    public function getRegistrationNumber() {
        return $this->registrationNumber;
    }
    
    /**
     * Sets the value of the objects 'Registration Number' property.
     * 
     * @param string $aRegNumber
     */
    public function setRegistrationNumber($aRegNumber) {
        $this->registrationNumber = $aRegNumber;
    }
    
    /**
     * Returns the value of the objects 'Colour' property.
     * 
     * @return string
     */
    public function getColour() {
        return $this->colour;
    }
    
    /**
     * Sets the value of the objects 'Colour' property.
     * 
     * @param string $aColour
     */
    public function setColour($aColour) {
        $this->colour = $aColour;
    }
    
    /**
     * Returns the value of the objects 'Number of Wheels' property.
     * 
     * @return integer
     */
    public function getNumberOfWheels() {
        return $this->numberOfWheels;
    }

    /**
     * Returns the value of the objects 'Height' property in centimetres (cm).
     * 
     * @return integer
     */
    public function getHeight() {
        return $this->height;
    }
    
    /**
     * Returns the value of the objects 'Driver' property.
     * 
     * @return Driver
     */
    public function getDriver() {
        return $this->driver;
    }
    
    /**
     * Sets the value of the objects 'Driver' property.
     * 
     * @param Driver $aDriver
     */
    public function setDriver($aDriver) {
        $this->driver = $aDriver;
    }
    
    /**
     * Returns the value of the objects 'Registered Owner' property.
     * 
     * @return RegisteredOwner
     */
    public function getRegisteredOwner() {
        return $this->registeredOwner;
    }
    
    /**
     * Sets the value of the objects 'Registered Owner' property.
     * 
     * @param RegisteredOwner $aRegisteredOwner
     */
    public function setRegisteredOwner($aRegisteredOwner) {
        $this->registeredOwner = $aRegisteredOwner;
    }
    
    /**
     * Magic __toString.
     * 
     * @return string
     */
    public function __toString() {
        return get_class($this) . ' ' . $this->getRegistrationNumber() . ' ' . 
                    $this->getDriver()->getName();
    }
}
