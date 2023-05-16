<?php

interface iGetParams {
    /**
     * интерфейс для показа видов оружиния - getWeapon и показ стиля - getStyle
     */
    public function getStyle();
    public function getWeapon();
}


abstract class Warrior implements iGetParams{
    public string $name;
    public string $style = "ближник";
    public int $armor = 10;
    public int $health = 100;
    public string $weapon = "меч";
    public array $spisokStyle = ["ближник", "дальник"];
    public array $spisokWeapon = ["меч", "копье", "топор", "лук"];

    public function getStats() {
         return "Имя: " . $this->name  . "<br>". 
        "Стиль владения оружием: " . $this->style . "<br>".
        "Армор: " . $this->armor . "<br>".
        "Здоровье: " . $this->health . "<br>". 
        "Оружие: " . $this->weapon . "<br>";
    }

    abstract public function changeStyle(string $style);

    abstract public function setWeapon(string $weapon);

}


class knight extends Warrior{
    public function __construct($name) {
        $this->name = $name;
    }

    public function getStyle() {
        echo "список стилей: <br>";
        foreach($this->spisokStyle as $value) {
            echo $value . "<br>";
        }
    }
    public function getWeapon() {
        echo "список оружие: <br>";
        foreach($this->spisokWeapon as $value) {
            echo $value . "<br>";
        }
    }

    public function getStats() {
        return parent::getStats();
    }

    public function changeStyle(string $style) {
        if($style == $this->style) {
            return "<br> нельзя сменить на один и тот же класс";
        }
        else {
            if(trim($style) == "ближник" || trim($style) == "дальник") {
                $this->style = $style;

                return "<br> стиль успешно сменен на - $style";
            }
            else {
                return "<br> такого стиля нету";
            }
        }
    }

    public function setWeapon(string $weapon) {

         if(in_array($weapon, $this->spisokWeapon)) {
            if($weapon == $this->weapon) {
                return "<br> нельзя сменить на одно и тоже оружие";
            }
            else if($this->style == "дальник") {
                if($weapon != "лук") {
                    return "смените класс чтоб взять данное оружие";
                }
                else {
                    $this->weapon = $weapon;
    
                    return "оружие успешно сменено  на $weapon";
                }
            }
            else if($this->style == "ближник") {
                if($weapon == "лук") {
                    return "смените класс чтоб взять данное оружие";
                }
                else {
                    $this->weapon = $weapon;
    
                    return "оружие успешно сменено на $weapon";
                }
            }
         }
         else {
            return "данного оружия нету";
         }


    }
}

$knight1 = new knight("Stepan");
echo $knight1->getStats();
echo "<br><br>";
echo $knight1->setWeapon("лук");
echo "<br><br>";
echo $knight1->changeStyle("дальник");
echo "<br><br>";
echo $knight1->setWeapon("лук");
echo "<br><br>";
echo $knight1->getStats();
echo "<br><br>";
echo $knight1->getStyle();
echo "<br><br>";
echo $knight1->getWeapon();



