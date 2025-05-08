<?php
trait A{
    public function welcome(){
        echo "Hello from A<br>";
    }
}
trait B{
    public function greetings(){
        echo "Have a good days from B<br>";
    }
}

class C{
    use A,B;
    public function greet(){
        echo "Nice to meet you from C<br>";
    }
}   

    $obj = new C();
    $obj->welcome();
    $obj->greetings();
    $obj->greet();
?>