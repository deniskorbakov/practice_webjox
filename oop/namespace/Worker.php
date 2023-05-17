<?php

namespace Home\Workers;

abstract class Worker {
    protected $position;
    protected $name;
    protected $age;
    protected $salary;

    public function __construct($position, $name, $age, $salary)
    {
        $this->position = $position;
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getAllData() {
        return "Должность: " . $this->position . "<br>" . 
        "Имя: " . $this->name . "<br>" .
        "Возраст: " . $this->age . "<br>" .
        "Зарплата: " . $this->salary . "<br>";
    }

    abstract public function introduceMyself();
}

class Developer extends Worker {
    public function introduceMyself() {
        return "Меня зовут: " . $this->name;
    }
}

class SuperMan extends Worker {
    public function introduceMyself() {
        return "Меня зовут: " . $this->name;
    }
}