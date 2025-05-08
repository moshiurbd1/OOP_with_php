<?php
class mathHelper{
    public static $PI=3.1416;
    public static function squre($x){
        return $x*$x;
    }
}
echo 'From Static property: '.mathHelper::$PI.'<br>';
echo 'From Static method: '.mathHelper::squre(5);

?>
<pre>
// No object use with this class
//Class with only static
//static keyword use
</pre>