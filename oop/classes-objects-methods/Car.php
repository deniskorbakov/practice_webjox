<?php

class Car {
    /**
     * deterioration - изношенность машшины
     */

    private string $name;
    private int $maxSpeed;
    private float $deterioration;

    public function __construct($name, $maxSpeed, $deterioration)
    {
        $this->name = $name;
        $this->maxSpeed = $maxSpeed;
        $this->deterioration = $deterioration;
    }

    public function getParams()
    {
        return "<br> Марка машины: " . $this->name . 
        "<br> Максимальная Скорость: " . $this->maxSpeed . 
        "<br> Изношенность: " . round($this->deterioration) . "%";
    }

    public function drive(int $distance) {
        if($this->deterioration < 80) {
            $this->attrition($distance);

            return "<br><br>" . "Машина успешно проехала: " . $distance . "км" . "<br>";
        }
        else {
            return "<br><br> машина поломана <br>";
        }

        
    }

    private function attrition(int $distance) {
        //выдуманная формула для износа автомобиля
        $this->deterioration += (($distance / $this->maxSpeed) * 2);
    }

}

$car1 = new Car("BMW", 200, 50.25);

echo $car1->getParams();

echo $car1->drive(1000);
echo $car1->drive(1000);
echo $car1->drive(1000);
echo $car1->drive(1000);

echo $car1->getParams();

