<?php

//indexed array
$fruits = array("Apple","Banana","Mango");
echo $fruits[0]."<br>";
echo $fruits[1]."<br>";
echo $fruits[2]."<br>";

//Associative Array
$student = array(
    "name"=>"Kuluni",
    "age"=>22,
    "course"=>"Computer science"
);
echo $student["name"]."<br>";
echo $student["course"]."<br>";

//multidimentional array
$marks = array(
    "Kuluni"=>array("Maths"=>90,"English"=>85),
    "Amal"=>array("Maths"=>75,"English"=>80)
);
echo $marks["Kuluni"]["Maths"]."<br>";
echo $marks["Amal"]["English"]."<br>";
?>