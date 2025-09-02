# PHP Basics 
_A complete beginner-friendly PHP tutorial with examples_  

This repository (`Laravel basic`) contains **PHP fundamental concepts** in a single file.  
It’s designed as a **step-by-step learning guide** before diving into Laravel framework.  

---

## 📌 Table of Contents
1. [Introduction](#introduction)  
2. [Comments](#comments)  
3. [Variables & Data Types](#variables--data-types)  
4. [Operators](#operators)  
5. [Conditional Statements](#conditional-statements)  
6. [Loops](#loops)  
7. [Functions](#functions)  
8. [Arrays](#arrays)  
9. [Object-Oriented Programming (OOP)](#object-oriented-programming-oop)  
   - Classes & Objects  
   - Constructor & Destructor  
   - Inheritance  
   - Access Modifiers  
   - Encapsulation  
   - Polymorphism  
   - Abstract Classes  
   - Interfaces  
   - Static Properties & Methods  
10. [Conclusion](#conclusion)

---

## Introduction  
PHP is a server-side scripting language widely used for **web development**.  
Before learning Laravel, it’s important to master **core PHP concepts**.

This repo walks through examples of:
- Variables & operators  
- Conditions & loops  
- Functions & arrays  
- OOP principles  

---

## Comments  
```php
// Single line comment

/*
   Multi-line comment
*/
```

## Variables & Data Types
```php
$name = "sharada";   // String
$age = 22;           // Integer
$price = 99.50;      // Float/Double
$is_student = true;  // Boolean

Output Example
echo $name;   // sharada
echo $age;    // 22
echo $price;  // 99.5
```


## Operators
### Arithmetic
```php
$x = 10; $y = 5;
echo $x + $y; // 15
echo $x - $y; // 5
echo $x * $y; // 50
echo $x / $y; // 2
echo $x % $y; // 0
echo $x ** $y; // Power: 100000
```
### Assignment
```php
$x += $y;  // $x = $x + $y
$x -= $y;
$x *= $y;
$x /= $y;
$x %= $y;
```
### Comparison
```php
echo ($x == $y);   // Equal
echo ($x === $y);  // Identical (type + value)
echo ($x != $y);   // Not equal
echo ($x > $y);    // Greater than
echo ($x <=> $y);  // Spaceship operator
```
### Increment / Decrement
```php
echo ++$x;  // Pre-increment
echo $x++;  // Post-increment
echo --$x;  // Pre-decrement
echo $x--;  // Post-decrement
```
### Logical
```php
echo ($x && $y);  // AND
echo ($x || $y);  // OR
echo !$y;         // NOT
```

## Conditional Statements
```php
 if / else
if($t < 10){
    echo "Good morning";
} else {
    echo "Good day";
}
```
if / elseif / else
```php
$t = date("H");
if($t < 10){
    echo "Good morning";
} elseif($t < 20){
    echo "Good day";
} else {
    echo "Good night";
}
```
Nested if
```php
$a = 13;
if($a > 10){
    if($a > 20){
        echo "Above 20";
    } else {
        echo "Between 10 and 20";
    }
}
```
Switch
```php
switch($favcolor){
    case "red": echo "Red"; break;
    case "blue": echo "Blue"; break;
    default: echo "Other color";
}
```

## Loops
While
```php
$i = 1;
while($i <= 5){
    echo $i;
    $i++;
}
```
Do While
```php
$i = 1;
do {
    echo $i;
    $i++;
} while($i <= 5);
```
For Loop
```php
for($x=0; $x<=10; $x++){
    echo "Number: $x";
}
```
Foreach
```php
$colors = ["red","green","blue"];
foreach($colors as $c){
    echo $c;
}
```

## Functions
- Basic Function
```php
function myMessage(){
    echo "Hello World";
}
myMessage();
```
- With Parameters & Return
```php
function sum($x, $y){
    return $x + $y;
}
echo sum(5,10); // 15
```

## Arrays
- Indexed Array
- ```php
$fruits = ["Apple","Banana","Mango"];
echo $fruits[0]; // Apple
```
- Associative Array
```php
$student = ["name"=>"Kuluni", "age"=>22, "course"=>"CS"];
echo $student["name"]; // Kuluni
```
- Multidimensional Array
```php
$marks = [
  "Kuluni"=>["Maths"=>90, "English"=>85],
  "Amal"=>["Maths"=>75, "English"=>80]
];
echo $marks["Kuluni"]["Maths"]; // 90
```

## Object-Oriented Programming (OOP)
- Class & Object
- ```php
class Car {
   public $brand;
   public $color;
   public function start() {
      echo "Car started";
   }
}
$myCar = new Car();
$myCar->brand = "Toyota";
echo $myCar->brand; // Toyota
```

- Constructor & Destructor
```php
class Student {
   public $name;
   function __construct($n){
       $this->name = $n;
   }
   function __destruct(){
       echo "Object destroyed";
   }
}
$st = new Student("Kuluni");
echo $st->name;
```
- Inheritance
- ```php
class Animal {
   public function sound(){ echo "Animal sound"; }
}
class Dog extends Animal {
   public function sound(){ echo "Dog barks"; }
}
$dog = new Dog();
$dog->sound();
```
- Access Modifiers
```php
class Person {
   public $name = "Kuluni";
   private $age = 22;
   protected $country = "SL";

   public function showInfo(){
       echo $this->name.$this->age.$this->country;
   }
}
```
- Encapsulation (Getters & Setters)
```php
class BankAccount {
   private $balance = 0;
   public function deposit($amount){ $this->balance += $amount; }
   public function getBalance(){ return $this->balance; }
}
$acc = new BankAccount();
$acc->deposit(500);
echo $acc->getBalance(); // 500
```
- Polymorphism
```php
class Shape { public function draw(){ echo "Drawing shape"; } }
class Circle extends Shape { public function draw(){ echo "Drawing circle"; } }
class Square extends Shape { public function draw(){ echo "Drawing square"; } }

$shapes = [new Circle(), new Square()];
foreach($shapes as $s){ $s->draw(); }
```
- Abstract Class
  ```php
abstract class Vehicle {
   abstract public function move();
}
class Bike extends Vehicle {
   public function move(){ echo "Bike moves on 2 wheels"; }
}
$bike = new Bike();
$bike->move();
```
- Interface
```php
interface Payment {
   public function pay($amount);
}
class CreditCard implements Payment {
   public function pay($amount){ echo "Paid $amount with card"; }
}
$cc = new CreditCard();
$cc->pay(1000);
```
- Static
 ```php
class Counter {
   public static $count = 0;
   public static function increment(){ self::$count++; }
}
Counter::increment();
Counter::increment();
echo Counter::$count; // 2
```

## Conclusion 🎉
------
This file covers all PHP basics you need before starting Laravel:
- Variables & Operators
- Conditions & Loops
- Functions & Arrays
- OOP (Classes, Objects, Inheritance, Polymorphism, Abstraction, Interfaces, Static)
----
