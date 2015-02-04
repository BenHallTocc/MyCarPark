<?php

require_once '../autoload.php';

use MyCarPark\CarPark as CP;
use MyCarPark\Car;
use MyCarPark\Van;
use MyCarPark\Lorry;
use MyCarPark\Motorbike;
use MyCarPark\Driver;
use MyCarPark\RegisteredOwner;

class CarParkTest extends PHPUnit_Framework_TestCase {
    
    //--------------- Test Fixture ---------------//
    
    private $carPark;
    
    public function setUp() {
        $this->carPark = new CP('MultiStorey', 400, 100, 5, 30, 6);
        
        $car1 = $this->getCar1();
        $car2 = $this->getCar2();
        $van1 = $this->getVan1();
        $carsAndVans = [$car1, $car2, $van1];
        $this->carPark->setParkedCarsAndVans($carsAndVans);
        
        $lorry1 = $this->getLorry1();
        $lorry2 = $this->getLorry2();
        $lorries = [$lorry1, $lorry2];
        $this->carPark->setParkedLorries($lorries);
        
        $motorbike1 = $this->getMotorbike1();
        $motorbike2 = $this->getMotorbike2();
        $motorbikes = [$motorbike1, $motorbike2];
        $this->carPark->setParkedMotorbikes($motorbikes);
    }
    
    public function tearDown() {
        parent::tearDown();
    }
    
    
    //--------------- Test Methods ---------------//
    
    /**
     * Tests 'getTotalNumberOfSpaces()' function.
     * 
     * @test
     */
    public function testGetTotalNumberOfSpaces() {
        $carSpaces = 100;
        $lorrySpaces = 5;
        $motorbikeSpaces = 30;
        
        $expectedResult = $carSpaces + $lorrySpaces + $motorbikeSpaces;
        
        $result = $this->carPark->getTotalNumberOfSpaces();
        
        $this->assertEquals($expectedResult, $result);
    }
    
    /**
     * Tests 'getNumberOfOccupiedSpaces()' function.
     * 
     * @test
     */
    public function testGetNumberOfOccupiedSpaces() {
        $carsAndVans = $this->getArrayOfCarsAndVans();
        $lorries = $this->getArrayOfLorries();
        $motorbikes = $this->getArrayOfMotorbikes();
        
        $expectedResult = count($carsAndVans) + count($lorries) + count($motorbikes);
        
        $result = $this->carPark->getNumberOfOccupiedSpaces();
        
        $this->assertEquals($expectedResult, $result);
    }
    
    /**
     * Tests 'getNumberOfFreeSpaces()' method.
     * 
     * @test
     */
    public function testGetNumberOfFreeSpaces() {
        $carSpaces = 100;
        $lorrySpaces = 5;
        $motorbikeSpaces = 30;
        
        $totalSpaces = $carSpaces + $lorrySpaces + $motorbikeSpaces;
        
        $carsAndVans = $this->getArrayOfCarsAndVans();
        $lorries = $this->getArrayOfLorries();
        $motorbikes = $this->getArrayOfMotorbikes();
        
        $occupiedSpaces = count($carsAndVans) + count($lorries) + count($motorbikes);
        $expectedResult = $totalSpaces - $occupiedSpaces;
        
        $result = $this->carPark->getNumberOfFreeSpaces();
        
        $this->assertEquals($expectedResult, $result);
    }
    
    /**
     * Tests 'getPercentageFull()' method.
     * 
     * @test
     */
    public function testGetPercentageFull() {
        $carSpaces = 100;
        $lorrySpaces = 5;
        $motorbikeSpaces = 30;
        
        $totalSpaces = $carSpaces + $lorrySpaces + $motorbikeSpaces;
        
        $carsAndVans = $this->getArrayOfCarsAndVans();
        $lorries = $this->getArrayOfLorries();
        $motorbikes = $this->getArrayOfMotorbikes();
        
        $occupiedSpaces = count($carsAndVans) + count($lorries) + count($motorbikes);
        $freeSpaces = (100 / $totalSpaces) * $occupiedSpaces;
        $expectedResult = (int)$freeSpaces;
        
        $result = $this->carPark->getPercentageFull();
        
        $this->assertEquals($expectedResult, $result);
    }
    
    /**
     * Tests 'heightChecker()' method.
     * 
     * @test
     */
    public function testHeightChecker() {
        $aVehicle = $this->getCar1();
        $result = $this->carPark->heightChecker($aVehicle);
        
        $this->assertTrue($result);
        
        $aTallVehicle = new Car('UR02 1KJ', 'Red', 4, 450, 
                                new Driver('Joe Bloggs', 'AS452KJH'),
                                new RegisteredOwner('Joe Bloggs', '8 The Street', 'jbloggs@gmail.com'));
        
        $tooTallResult = $this->carPark->heightChecker($aTallVehicle);

        $this->assertFalse($tooTallResult);
    }
    
    /**
     * Tests 'appropiateSpacesAvailable()' method.
     * 
     * @test
     */
    
    public function testAppropriateSpaceAvailable() {
        // Testing result when there is sufficient space
        // NOTE: 'get_class()' is used in tested method!
        $aVehicle = 'Car';
        $result = $this->carPark->appropriateSpaceAvailable($aVehicle);
        
        $this->assertTrue($result);
        
        // Testing result when there is insufficient space
        $this->carPark->setNumberOfCarSpaces(3);
        $noSpaceResult = $this->carPark->appropriateSpaceAvailable($aVehicle);
        
        $this->assertFalse($noSpaceResult);
        
        // Testing result when class name is not recognised
        // NOTE: 'get_class()' is used in tested method!
        $anUnrecognisedVehicle = 'Snowmobile';
        $noClassNameResult = $this->carPark->appropriateSpaceAvailable($anUnrecognisedVehicle);
        
        $this->assertFalse($noClassNameResult);
    }
    
    
    //--------------- Helper Methods for Tests ---------------//
    
    /**
     * Returns an appropriate Car object with which to work.
     * 
     * @return \Car
     */
    public function getCar1() {
        return new Car('YO34 7HG', 'Red', 4, 130, 
                        new Driver('Joe Bloggs', 'AS452KJH'),
                        new RegisteredOwner('Joe Bloggs', '8 The Street', 'jbloggs@gmail.com'));
    }
    
    /**
     * Returns an appropriate Car object with which to work.
     * 
     * @return \Car
     */
    public function getCar2() {
        return new Car('JK83 1QW', 'White', 4, 145,
                        new Driver('Dave Summmink', 'P9063HYT'),
                        new RegisteredOwner('Vera Summink', '23 House Road', 'vera@hotmail.com'));
    }
    
    /**
     * Returns an appropriate Van object with which to work.
     * 
     * @return \Car
     */
    public function getVan1() {
        return new Van('UF27 9DS', 'White', 4, 150,
                        new Driver('Alice Holmes', 'O6751FDN'),
                        new RegisteredOwner('Alan Holmes', '90 House Road', 'alan.holmes@gmail.com'));
    }
    
    /**
     * Returns an appropriate array of Car/Van objects with which to work.
     * 
     * @return array
     */
    public function getArrayOfCarsAndVans() {
        $car1 = $this->getCar1();
        $car2 = $this->getCar2();
        $van1 = $this->getVan1();
        
        return [$car1, $car2, $van1];
    }
    
    /**
     * Returns an appropriate Lorry object with which to work.
     * 
     * @return \Lorry
     */
    public function getLorry1() {
        return new Lorry('LK37 1WQ', 'Black', 8, 390,
                        new Driver('Bernard Sandy', 'T7200YFV'),
                        new RegisteredOwner('Morrison Haulage', '2 Industrial Estate', 'contact@morrison-haulage.co.uk'));
    }
    
    /**
     * Returns an appropriate Lorry object with which to work.
     * 
     * @return \Lorry
     */
    public function getLorry2() {
        return new Lorry('HY73 2LO', 'Grey', 12, 380,
                        new Driver('Dave Filbert', 'I9875DNQ'),
                        new RegisteredOwner('Addisons', 'The Plain', 'contact@addisons.co.uk'));
    }
    
    /**
     * Returns an appropriate array of Lorry objects with which to work.
     * 
     * @return array
     */
    public function getArrayOfLorries() {
        $lorry1 = $this->getLorry1();
        $lorry2 = $this->getLorry2();
        
        return [$lorry1, $lorry2];
    }
    
    /**
     * Returns an appropriate Motrobike object with which to work.
     * 
     * @return \Motorbike
     */
    public function getMotorbike1() {
        return new Motorbike('FR11 2NN', 'Blue', 2, 90,
                        new Driver('Barry Knievil', 'I0067CZA'),
                        new RegisteredOwner('Barry Knievil', '129 Pope Road', '$anEmail', 'b.knievil@yahoo.co.uk'));
    }
    
    /**
     * Returns an appropriate Motrobike object with which to work.
     * 
     * @return \Motorbike
     */
    public function getMotorbike2() {
        return new Motorbike('WD38 5FH', 'Black', 2, 95,
                        new Driver('Fiona Jones', 'P9829NIK'),
                        new RegisteredOwner('Fiona Jones', '278 Willlow Drive', 'jonesy@hotmail.com'));
    }
    
    /**
     * Returns an appropriate array of Motorbike objects with which to work.
     * 
     * @return array
     */
    public function getArrayOfMotorbikes() {
        $motorbike1 = $this->getMotorbike1();
        $motorbike2 = $this->getMotorbike2();
        
        return [$motorbike1, $motorbike2];
    }
}


