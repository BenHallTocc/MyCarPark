<?php

namespace MyCarPark;

/**
 * Description of class
 *
 * @author b.hall
 */
class Stay {
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
    protected $entry;
    
    
    /**
     * Time the vehicle is requested to leave the car park by.
     * Derived by adding the car parks 'Max Stay' property
     * to the vehicles entry time
     * 
     * @var DateTime
     */
    protected $EXIT_BY;
}
