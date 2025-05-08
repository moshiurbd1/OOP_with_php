<?php
class mathHelper{
    public static $PI=3.1416;
    public static function squre($x){
        return $x*$x;
    }
}
echo mathHelper::$PI.'<br>';
echo mathHelper::squre(5);

?>
// No object use with this class
//Class with only static
//static keyword use