<?php

class Car {

    public function color(){
        echo 'White';
    }

    public function engine(){
        echo "4100cc";
    }

    public function model(){
        echo "N14564";
    }
}


$objectCar = new Car();

$objectCar->engine();
echo "<br>";
$objectCar->color();
echo "<br>";
$objectCar->model();


class Calculator {
    public function sum($num1, $num2){
        $x = $num1;
        $y = $num2;

        $result = $x+$y;
        return $result;
    }

    public function sub($num1, $num2){
        $x = $num1;
        $y = $num2;

        $result = $x-$y;
        return $result;
    }

    public function div($num1, $num2){
        $x = $num1;
        $y = $num2;

        $result = $x/$y;
        return $result;
    }

    public function mul($num1, $num2){
        $x = $num1;
        $y = $num2;

        $result = $x*$y;
        return $result;
    }

}

$objectCalculator = new Calculator();
echo "<br>"; 
echo "The sum is=". $objectCalculator->sum(20, 30); //50
echo "<br>";
echo "The sum is=".$objectCalculator->sum(50, 100);
echo "<br>";
echo "The div is=".$objectCalculator->div(30, 6);
echo "<br>";
echo "The Mul is=".$objectCalculator->mul(50, 6);
echo "<br>";

?>