<?php
interface Vehicle{
    
    public function fuelAmount($a);
    public function capacity($b);
    
}

class Car implements Vehicle{
    //must implement all funcitons for
    public function fuelAmount($f){
        echo "Total fuel amount: ".$f.'<br>';
    }

    public function capacity($c){
        echo "The capacity is : ".$c;
    }
}

$obj=new Car();
$obj->fuelAmount(10);
$obj->capacity(20);

?>