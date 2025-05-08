<?php
abstract class Vehicle{
    public function vehicleColor(){
        echo "The vehicle color is green";
    }
    abstract public function fuelAmount($a);
    abstract public function capacity($b);
    
}

class Car extends Vehicle{
    //must implement all funcitons form interface class
    //abstract and interface class can not creat object
    //abstract class extends in class and interface implements in class
    public function fuelAmount($f){
        echo "Total fuel amount: ".$f.'<br>';
    }

    public function capacity($c){
        echo "The capacity is : ".$c.'<br>';
    }
}

$obj=new Car();
$obj->fuelAmount(10);
$obj->capacity(20);
$obj->vehicleColor();

?>