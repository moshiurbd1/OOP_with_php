<?php
class Car{
public $fuel=20;

public function __construct($a,$b){
   $this->fuel=$a+$b;
}
public function carColor($color){
    echo "The color is ".$color.'<br/>';
}
public function speed(){
    $speed=$this->fuel*5;
    echo $speed.' KM per hour<br/>';
}
public function Break(){
    echo "Apply Break<br/>";
}
}

$obj=new Car(10,20);
echo $obj->speed();
echo $obj->carColor('red');
echo $obj->Break();


?>