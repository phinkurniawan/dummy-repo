<?php
class Person{
    private $name;
    private $age;
    private $hobby;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
        return ;
    }
}
