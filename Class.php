<?php
class Calculator{
    public $x;
    public $y;

    public function Setter($a,$b){
        $this->x=$a;
        $this->y=$b;
    }
    public function sum(){
        return $this->x+$this->y;
    }
    public function sub(){
        return $this->y-$this->x;
    }
    public function mul(){
        return $this->x*$this->y;
    }
    public function div(){
        return $this->y/$this->x;
    }

}

$obj=new Calculator();
$obj->Setter(10,20);
echo $obj->x.' '.$obj->y.'<br/>';
echo 'Summmation :'.$obj->sum().'<br/>';
echo 'Subtruciton :'.$obj->sub().'<br/>';
echo 'Multiplication :'.$obj->mul().'<br/>';
echo 'Division :'.$obj->div().'<br/>';

?>