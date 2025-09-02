<?php

//class and object
class Car{
    public $brand;
    public $color;
    public function start(){
        echo " Car started";
    }
}
$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->color = "Red";
echo $myCar -> brand;
$myCar->start();


//constructor and deconstructor
class Student{
    public $name;

    //constructor
    function _constructor($n){
        $this->name = $n;
    }

    //Deconstructor
    function _destruct(){
        echo "Object destoryed";
    }
}
    $st = new Student("Kuluni");
    echo $st ->name;


//Inheritance
class Animal{
    public function sound(){
        echo "Animal makes a sound";
    }
}
class Dog extends Animal{
    public function sound(){
        echo "Dog barks";
    }
}
$dog = new Dog();
$dog -> sound();



//Access Modifiers
class Person{
    public $name = "Kuluni";
    private $age = 22;
    protected $country = "SL";

    public function showInfo(){
        echo $this->name;
        echo $this->age;
        echo $this->country;
    }
}
$p = new Person();
echo $p -> name;
$p -> showInfo();


//Encapsulation(Getters and setters)
class BankAccount{
    private $balance = 0;

    public function deposite($amount){
        $this -> balance += $amount;
    }

    public function getBalance(){
        return  $this->balance;
    }
}
$acc = new BankAccount();
$acc -> deposite(500);
echo $acc->getBalance();


//polymophism
class Shape{
    public function draw(){
        echo "Drawing shape";
    }
}
class Circle extends Shape{
    public function draw(){
        echo "Drawing square";
    }
}
class Square extends Shape{
    public function draw(){
        echo "Drawing square";
    }
}
$shapes = [new Circle(), new Square()];
foreach($shapes as $s){
    $s -> draw();
}


//Abstract class
abstract class Vehicle{
    abstract public function move();
}
class Bike extends Vehicle{
    public function move(){
        echo "Bike moves on 2 wheels";
    }
}
$bike = new Bike();
$bike -> move();


//interface
interface Payment{
    public function pay($amount);
}
class CreditCard implements Payment{
    public function pay($amount){
        echo "Paid $amount using creadit card";
    }
}
$cc = new CreditCard();
$cc -> pay(1000);


//static propertise and methods
class Counter {
    public static $count = 0;

    public static function increment() {
        self::$count++;
    }
}

Counter::increment();
Counter::increment();
echo Counter::$count; 



?>