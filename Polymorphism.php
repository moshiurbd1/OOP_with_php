<?php
interface Calc{
    public function calcArea();
}
class CircleArea implements Calc{
    private $radius;
    public function __construct($radius){
        $this->radius=$radius;
    }
    public function calcArea(){
        $x= pi()*$this->radius**2;
        return number_format($x,2);
    }
}
class RectangleArea implements Calc{
    private $height;
    private $width;
    public function __construct($height,$width){
        $this->height=$height;
        $this->width=$width;
    }
    public function calcArea(){
        
        return $this->height*$this->width;
    }
}

$Circle= new CircleArea(5);
echo 'Circle Area : '.$Circle->calcArea().'<br>';

$Rectangle = new RectangleArea(10,20);
echo 'Rectangel Area : '.$Rectangle->calcArea();
?>