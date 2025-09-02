<?php
//Basic function
function myMessage(){
    echo "Hello world<br>";
}
myMessage();

//function example 1
function sum($x,$y){
    $z = $x + $y;
    return $z;
}
echo "5 + 10 = ".sum(5,10)."<br>";
echo "7 + 10 = ".sum(7,13)."<br>";
?>