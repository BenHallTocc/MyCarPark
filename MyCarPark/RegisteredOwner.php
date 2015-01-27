<?php

namespace MyCarPark;

/**
 * Description of the 'Registered Owner' class.
 *
 * @author b.hall
 */
class RegisteredOwner extends Person {
    /**
     * Postal address.
     * 
     * @var string 
     */
    protected $address;
    
    /**
     * Email address.
     * 
     * @var string
     */
    protected $email;
    
    /**
     * Constructor for an instance of the 'Registered Owner' class.
     * 
     * @param string $aName
     * @param string $anAddress
     * @param string $anEmail
     */
    function __construct($aName, $anAddress, $anEmail) {
        $this->name = $aName;
        $this->address = $anAddress;
        $this->email = $anEmail;
    }
    
    /**
     * Returns the value of the objects 'Address' property.
     * 
     * @return string
     */
    public function getAddress() {
        return $this->address;
    }
    
    /**
     * Sets the value of the objects 'Address' property.
     * 
     * @param string $anAddress
     */
    public function setAddress($anAddress) {
        $this->address = $anAddress;
    }
    
    /**
     * Returns the value of the objects 'Email' property.
     * 
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }
    
    /**
     * Sets the value of the objects 'Email' property.
     * 
     * @param string $anEmail
     */
    public function setEmail($anEmail) {
        $this->email = $anEmail;
    }
}

