<?php
class Vehicle{
   public $fuel,$capa;
   public function __construct($fuel,$capa){
    $this->fuel=$fuel;
    $this->capa=$capa;

    echo "Constructor implemented<br>";
   }
   public function fuelAmount(){
    return $this->fuel;
   }
   public function fuelCapacity(){
    return $this->capa;
   }
   public function applyBreak(){
    echo "Applying Break";
   }

}
$obj=new Vehicle(10,20);
class Car extends Vehicle{
    //Constructor overriding
    public function __construct($fuel,$capacity){
        parent::__construct($fuel,$capacity);
        echo "Constructor Inheritance Implemented<br>";
    }
    //Method overriding
    public function fuelCapacity(){
        echo 'Method overriding: '.$this->capa=25;
    }
    public function color($color){
        echo "The car color is ".$color;
    }
}

$obj2 =new Car(10,20);
echo 'Inherited Method : '.$obj2->fuelAmount().'<br>';
echo 'Self class Method '.$obj2->color('Green').'<br>';
$obj2->fuelCapacity();



?>