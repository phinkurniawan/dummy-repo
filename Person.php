<?php
class Person{
    private $name;
    private $age;
    private $hobby;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}
