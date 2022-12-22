<?php 
// function increment() {
//     static $a = 0;
//     $a ++;
//     echo '<br>',$a;
// }

// increment();
// increment();
// increment();
trait string1{
    public function a() {
        echo 'This is trati string1';
    }
}
trait string2{
    public function b() {
        echo 'This is trati string2';
    }
}
class string3{

    use string1,string2;
}
$call= new string3();

$call->a();

$call->b();

?>