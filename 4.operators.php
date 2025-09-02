<?php

$x = 10;
$y = 5;

//Arithmatic operator
echo $x + $y."<br>";
echo $x - $y."<br>";
echo $x * $y."<br>";
echo $x / $y."<br>";
echo $x % $y."<br>";
echo $x ** $y."<br>";

//Assinment operator
// echo $x = $y . "<br>";       // Assign $y to $x and print
echo ($x += $y) . "<br>";    // Add $y to $x and print
echo ($x -= $y) . "<br>";    // Subtract $y from $x and print
echo ($x *= $y) . "<br>";    // Multiply $x by $y and print
echo ($x /= $y) . "<br>";    // Divide $x by $y and print
echo ($x %= $y) . "<br>";    // Modulus $x by $y and print


//comparison operator
echo ($x == $y) . "<br>"; //Equal
echo ($x === $y) . "<br>"; //identical
echo ($x != $y) . "<br>"; //not equal
echo ($x <> $y) . "<br>"; // not equal
echo ($x !== $y) . "<br>"; //not identical
echo ($x > $y) . "<br>"; //greater than
echo ($x < $y) . "<br>"; //less than
echo ($x >= $y) . "<br>"; //greater than or equal to
echo ($x <= $y) . "<br>";  //less than or equal to
echo ($x <=> $y) . "<br>"; //spachip


// increment / Decrement operator
echo ++$x. "<br>"; //pre increment
echo $x++. "<br>"; //post increment
echo --$x. "<br>"; //pre decrement
echo $x--. "<br>"; //post decrement

//Logical operator
echo $x and $y. "<br>";
echo $x or $y. "<br>";
echo $x xor $y. "<br>";
echo $x && $y. "<br>";
echo $x || $y. "<br>";
echo  ! $y. "<br>";


?>