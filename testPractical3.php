<?php

/**
 * Define autoloader.
 * 
 * @param string $class_name
 */
/*function __autoload($class_name) {
    include $class_name;
}*/

require_once 'autoload.php';

// Part 1 - Create a new Car Park object.
echo '<h2>Create a new Car Park object</h2>';

$carPark = new CarPark('MultiStorey', 400, 100, 5, 50, 6);

echo $carPark->__toString();
        

// Part 2 - Create a number of vehicles of different kinds.
echo '<h2>Create a number of vehicles of different kinds</h2>';

$car1 = new Car('YO34 7HG', 'Red', 4, 130, 
                        new Driver('Joe Bloggs', 'AS452KJH'),
                        new RegisteredOwner('Joe Bloggs', '8 The Street', 'jbloggs@gmail.com'));
        
$car2 = new Car('JK83 1QW', 'White', 4, 145,
                        new Driver('Dave Summmink', 'P9063HYT'),
                        new RegisteredOwner('Vera Summink', '23 House Road', 'vera@hotmail.com'));
        
$car3 = new Car('TR42 8DE', 'Silver', 4, 140,
                        new Driver('Phil Collins', 'E1113YIK'),
                        new RegisteredOwner('Phil Collins', '476 Nowhere Lane', 'genesisrule@yahoo.co.uk'));
        
$van1 = new Van('UF27 9DS', 'White', 4, 150,
                        new Driver('Alice Holmes', 'O6751FDN'),
                        new RegisteredOwner('Alan Holmes', '90 House Road', 'alan.holmes@gmail.com'));
        
$lorry1 = new Lorry('LK37 1WQ', 'Black', 8, 390,
                        new Driver('Bernard Sandy', 'T7200YFV'),
                        new RegisteredOwner('Morrison Haulage', '2 Industrial Estate', 'contact@morrison-haulage.co.uk'));
        
$motorbike1 = new Motorbike('FR11 2NN', 'Blue', 2, 90,
                        new Driver('Barry Knievil', 'I0067CZA'),
                        new RegisteredOwner('Barry Knievil', '129 Pope Road', '$anEmail', 'b.knievil@yahoo.co.uk'));
        
$motorbike2 = new Motorbike('WD38 5FH', 'Black', 2, 95,
                        new Driver('Fiona Jones', 'P9829NIK'),
                        new RegisteredOwner('Fiona Jones', '278 Willlow Drive', 'jonesy@hotmail.com'));

echo 'Done!';


// Part 3 - Print the registration number of each vehicle.
echo '<h2>Print the Registration Numbers of each Vehicle</h2>';

$waitingVehicles = [$car1, $car2, $car3, $van1, $lorry1, $motorbike1, $motorbike2];

foreach ($waitingVehicles as $aVehicle) {
    echo $aVehicle->getRegistrationNumber() . '<br>';
}

        
// Part 4 - Park all the cars in the car park.
echo '<h2>Park all the cars in the Car Park</h2>';

foreach ($waitingVehicles as $aVehicle) {
    $carPark->vehicleEnters($aVehicle);
}
        
// Part 5 - Print a first report on the state of the car park.
echo '<h2>Print a first report on the state of the Car Park</h2>';

echo $carPark->currentStateReport();       
        

// Part 6 - Remove some parked cars.
echo '<h2>Remove some parked cars</h2>';

$carPark->vehicleLeaves($lorry1);
$carPark->vehicleLeaves($motorbike2);
        
// Part 7 - Print a second report on the state of the car park.
echo '<h2>Print a second report on the state of the Car Park</h2>';

echo $carPark->currentStateReport();