<?php

namespace MyCarPark;

/**
 * Description of the 'Car Park' class.
 *
 * @author b.hall
 */
class CarPark {
    /**
     * Car Park name.
     * 
     * @var string
     */
    protected $name;
    
    /**
     * Maximum height of the car park in centimetres (cm)
     * 
     * @var integer
     */
    protected $maxHeight;
    
    /**
     * Maximum number of car spaces in the car park.
     * 
     * @var integer
     */
    protected $numberOfCarSpaces;
    
    /**
     * Maximum number of lorry spaces in the car park.
     * 
     * @var integer
     */
    protected $numberOfLorrySpaces;
    
    /**
     * Maximum number of motorbike spaces in the car park.
     * 
     * @var integer
     */
    protected $numberOfMotorbikeSpaces;
    
    /**
     * Maximum stay in hours that a vehicle can utilise.
     * 
     * @var integer
     */
    protected $maxStay;
    
    /**
     * A collection of all the parked Cars & Vans in the car park.
     * 
     * @var array 
     */
    protected $parkedCarsAndVans = array();
    
    /**
     * A collection of all the parked Lorries in the car park.
     * 
     * @var array
     */
    protected $parkedLorries = array();
      
    /**
     * A collection of all the parked Motorbikes in the car park.
     * 
     * @var array
     */
    protected $parkedMotorbikes = array();
    
    /**
     * Constructor for an instance of the 'Car Park' class.
     * 
     * @param string $aName
     * @param integer $aMaxHeight
     * @param integer $aNumberOfCarSpaces
     * @param integer $aNumberOfLorrySpaces
     * @param integer $aNumberOfMotorbikeSpaces
     */
    function __construct($aName, $aMaxHeight, $aNumberOfCarSpaces,
                            $aNumberOfLorrySpaces, $aNumberOfMotorbikeSpaces, $aMaxStay) {
        $this->name = $aName;
        $this->maxHeight = $aMaxHeight;
        $this->numberOfCarSpaces = $aNumberOfCarSpaces;
        $this->numberOfLorrySpaces = $aNumberOfLorrySpaces;
        $this->numberOfMotorbikeSpaces = $aNumberOfMotorbikeSpaces;
        $this->maxStay = $aMaxStay;
    }
    
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
    
    /**
     * Returns the value of the objects 'Max Height' property in
     * centimetres (cm).
     * 
     * @return integer
     */
    public function getMaxHeight() {
        return $this->maxHeight;
    }
    
    /**
     * Sets the value of the objects 'Max Height' property in centimetres (cm).
     * 
     * @param integer $aMaxHeight
     */
    public function setMaxHeight($aMaxHeight) {
        $this->maxHeight = $aMaxHeight;
    }
    
    /**
     * Returns the value of the objects 'Number of Car Spaces' property.
     * 
     * @return integer
     */
    public function getNumberOfCarSpaces() {
        return $this->numberOfCarSpaces;
    }
    
    /**
     * Sets the value of the objects 'Number of Car Spaces' property.
     * 
     * @param integer $aNumberOfCarSpaces
     */
    public function setNumberOfCarSpaces($aNumberOfCarSpaces) {
        $this->numberOfCarSpaces = $aNumberOfCarSpaces;
    }
    
    /**
     * Returns the value of the objects 'Number of Lorry Spaces' property.
     * 
     * @return integer
     */
    public function getNumberOfLorrySpaces() {
        return $this->numberOfLorrySpaces;
    }
    
    /**
     * Sets the value of the objects 'Number of Lorry Spaces' property.
     * 
     * @param integer $aNumberOfLorrySpaces
     */
    public function setNumberOfLorrySpaces($aNumberOfLorrySpaces) {
        $this->numberOfLorrySpaces = $aNumberOfLorrySpaces;
    }
    
    /**
     * Returns the value of the objects 'Number of Motorbike Spaces' property.
     * 
     * @return integer
     */
    public function getNumberOfMotorbikeSpaces() {
        return $this->numberOfMotorbikeSpaces;
    }

    /**
     * Sets the value of the objects 'Number of Motorbike Spaces' property.
     * 
     * @param integer $aNumberOfMotorbikeSpaces
     */
    public function setNumberOfMotorbikeSpaces($aNumberOfMotorbikeSpaces) {
        $this->numberOfMotorbikeSpaces = $aNumberOfMotorbikeSpaces;
    }
    
    /**
     * Returns the value of the objects 'Max Stay' property.
     * 
     * @return integer
     */
    public function getMaxStay() {
        return $this->maxStay;
    }
    
    /**
     * Sets the value of the objects 'Max Stay' property.
     * 
     * @param integer $aMaxStay
     */
    public function setMaxStay($aMaxStay) {
        $this->maxStay = $aMaxStay;
    }
    
    /**
     * Returns the collection of Cars & Vans in 'Parked Vehicles'.
     * 
     * @return array 
     */
    public function getParkedCarsAndVans() {
        return $this->parkedCarsAndVans;
    }
    
    /**
     * Returns the collection of Lorries in 'Parked Vehicles'.
     * 
     * @return array
     */
    public function getParkedLorries() {
        return $this->parkedLorries;
    }
    
    /**
     * Returns the collection of Motorbikes in 'Parked Vehicles'.
     * 
     * @return array 
     */
    public function getParkedMotorbikes() {
        return $this->parkedMotorbikes;
    }
    
    /**
     * Returns the sum of the objects 'Number of Car Spaces', 'Number of
     * Lorry Spaces', and 'Number of Motorbike Spaces' properties.
     * 
     * @return integer
     */
    public function getTotalNumberOfSpaces() {
        return  $this->getNumberOfCarSpaces() + 
                $this->getNumberOfLorrySpaces() +
                $this->getNumberOfMotorbikeSpaces();
    }
    
    /**
     * Returns the sum of the number of parked vehicles from the
     * multidimensional 'Parked Vehicle' array.
     * 
     * @return integer
     */
    public function getNumberOfOccupiedSpaces() {
        return count($this->getParkedCarsAndVans()) +
               count($this->getParkedLorries()) +
               count($this->getParkedMotorbikes());
    }
    
    /**
     * Returns the total number of spaces available in the car park.
     * 
     * @return integer
     */
    public function getNumberOfFreeSpaces() {               
        return $this->getTotalNumberOfSpaces() - $this->getNumberOfOccupiedSpaces();
    }
    
    /**
     * Returns an integer value of the percentage of spaces occupied.
     * 
     * @return integer
     */
    function getPercentageFull() {
        $percentage = (100 / $this->getTotalNumberOfSpaces()) * 
                                $this->getNumberOfOccupiedSpaces();
        return (int)$percentage;
    }
    
    
    //-------- Managing Entry of Car Park --------//
    
    /**
     * Checks whether a vehicle fits within the max height restriction.
     * 
     * @param Vehicle $aVehicle
     * @return bool
     */
    function heightChecker($aVehicle) {
        return $this->getMaxHeight() > $aVehicle->getHeight();
    }
    
    /**
     * Checks what type of vehicle the argument is and checks whether their is
     * an appropriate space available for them.
     * 
     * @param Vehicle $aVehicle
     * @return boolean
     */
    function appropriateSpaceAvailable($aVehicle) {
        switch (get_class($aVehicle)) {
            case 'Car':
            case 'Van':
                if (count($this->parkedCarsAndVans) < $this->getNumberOfCarSpaces()) {
                    return true;
                }
                break;
            case 'Lorry':
                if (count($this->parkedLorries) < $this->getNumberOfLorrySpaces()) {
                    return true;
                }
                break;
            case 'Motorbike':
                if (count($this->parkedMotorbikes) < $this->getNumberOfMotorbikeSpaces()) {
                    return true;
                }
                break;
        }
        return false;
    }
    
    /**
     * Checks whether it is appropriate for a car to park.
     * 
     * @param Vehicle $aVehicle
     * @return bool
     */
    function canPark($aVehicle) {
        return $this->heightChecker($aVehicle) && $this->appropriateSpaceAvailable($aVehicle);
    }
    
    /**
     * Checks to see whether vehicle is eligible for entry, and if it is 
     * it's details are added to the appropriate collection in 
     * 'Parked Vehicles' and the user is informed. Otherwise the user is
     * informed that their entry has been denied st this time.
     * 
     * @param Vehicle $aVehicle
     */
    public function vehicleEnters($aVehicle) {
        if ($this->canPark($aVehicle)) {
            switch (get_class($aVehicle)) {
                case 'Car':
                case 'Van':
                    array_push($this->parkedCarsAndVans, $aVehicle);
                    break;
                case 'Lorry':
                    array_push($this->parkedLorries, $aVehicle);
                    break;
                case 'Motorbike':
                    array_push($this->parkedMotorbikes, $aVehicle);
                    break;
            }
            echo $aVehicle->getRegistrationNumber() . ' has been permitted entry. Welcome...<br>';
        } else {
            echo $aVehicle->getRegistrationNumber() . ' has been refused entry!<br>';
        }
    }
    
    
    //-------- Managing Exit of Car Park --------//
    
    /**
     * Removes vehicle from collection of parkedVehicles.
     * 
     * @param Vehicle $aVehicle
     */
    public function vehicleLeaves($aVehicle) {
        switch (get_class($aVehicle)) {
            case 'Car':
            case 'Van':
                $indexOfFind = array_search($aVehicle, $this->parkedCarsAndVans);
                unset($this->parkedCarsAndVans[$indexOfFind]);
                break;
            case 'Lorry':
                $indexOfFind = array_search($aVehicle, $this->parkedLorries);
                unset($this->parkedLorries[$indexOfFind]);
                break;
            case 'Motorbike':
                $indexOfFind = array_search($aVehicle, $this->parkedMotorbikes);
                unset($this->parkedMotorbikes[$indexOfFind]);
                break;
        }
        echo 'Goodbye ' . $aVehicle->getRegistrationNumber() . '!<br>';
    }
    
    
    //-------- Display, Report, and toString() Functions --------//
    
    /**
     * Returns a string made up of the Registration Numbers of the
     * contents of the 'Parked Vehicles' 
     * collection.
     * 
     * @return string
     */
    public function displayVehicleRegNumbers() {
        $regNumbers = '';
        $parkedVehicles = array_merge($this->getParkedCarsAndVans(),
                                      $this->getParkedLorries(),
                                      $this->getParkedMotorbikes());
        
        foreach ($parkedVehicles as $aVehicle) {
            $regNumbers .= $aVehicle->getRegistrationNumber() . '<br>';
        }
        
        return $regNumbers;
    }

    /**
     * Returns a string that details the current state of the car park.
     * 
     * @return string
     */
    public function currentStateReport() {
        return 'The ' . $this->getName() . ' car park currently has ' .
            $this->getNumberOfOccupiedSpaces() . ' occupied spaces and ' . 
            $this->getNumberOfFreeSpaces() . ' free spaces.<br>It is ' . 
            $this->getPercentageFull() . '% full.<br>The following vehicles are parked in the car park:<br>' .
            $this->displayVehicleRegNumbers();
    }
    
    /**
     * Magic __toString.
     * 
     * @return string
     */
    public function __toString() {
        return 'This Car Park is ' . $this->getName() . '.<br>' .
            'It has a maximum height of ' . $this->getMaxHeight() . 'cm,<br>' .
            $this->getNumberOfCarSpaces() . ' car spaces,<br>' .
            $this->getNumberOfLorrySpaces() . ' lorry spaces,<br>and ' .
            $this->getNumberOfMotorbikeSpaces() . ' motorbike spaces.<br>';
    }
}