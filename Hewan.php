<?php
class Hewan{
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function getName(){
        return $this->name;
    }

    public function makan (){
        echo "saya mau makan";
    }

}