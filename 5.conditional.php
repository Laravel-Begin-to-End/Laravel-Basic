<?php

//if condition
if(5>3){
    echo "Have a good day.<br>";
}

//if else
$t = 5;
if($t < "10"){
    echo "Have a good day<br>";
} else{
    echo "Bad day";
}

//if elseif else
$t = date("H");
if($t < "10"){
    echo "Have a good morning<br>";
} else if($t<20){
    echo "Have a good day<br>";
} else {
    echo "Have a good night<br>";
}


//short hand if
$a = 5;
if($a < 10)$b = "Hello<br>";
echo $b;


//nested if
$a = 13;
if($a > 10){
    echo "Above 10";
    if($a > 20){
        echo "and also above 20<br>";
    } else {
        echo "but not above 20<br>";
    }
}

//switch
$favcolor = "red";

switch($favcolor){
    case "red";
    echo "Your favourite color is red";
    break;
    case "blue";
    echo "Your favourite color is blue";
    break;
    case "green";
    echo "Your favourite color is green";
    break;
    default:
    echo "Your favourite color is neither red,blue nor green";
}
?>
