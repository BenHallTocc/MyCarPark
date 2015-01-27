<?php

namespace MyCarPark;

/**
 * Description of the abstract 'Person' class.
 *
 * @author b.hall
 */
abstract class Person {
    /**
     * Person's name.
     * 
     * @var string
     */
    protected $name;
    
    /**
     * Returns the value of the objects 'Name' property.
     * 
     * @return string
     */
    public function getName() {
        return $this->name;
    }
    
    /**
     * Sets the value of the objects 'Name' property.
     * 
     * @param string $aName
     */
    public function setName($aName) {
        $this->name = $aName;
    }
}
