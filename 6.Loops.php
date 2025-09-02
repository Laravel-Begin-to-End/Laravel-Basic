<?php

//while
$i = 1;
while($i < 6){
    echo $i."<br>";
    $i++;
}

//do whhile loop
$i = 1;
do{
    echo $i;
    $i++;
} while($i < 6);


//for loop
for ($x=0; $x <=10 ; $x++) { 
    echo "The number is : $x<br>";
}

//for each loop
$colors = array("red","green","blue","yellow");

foreach($colors as $x){
    echo "$x<br>";
}

//for each using var dum
$colors = array("red","green","blue","yellow");
foreach($colors as $x){
    if($x == "blue")
        $x = "pink";
}
var_dump($colors);
?>