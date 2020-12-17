<?php
class Animal {

    //property
    public $name;
    public $legs;
    public $cold_blooded;

    //contructor
    public function __construct($name,$legs,$cold_blooded){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;

    }
    
    //get method
    public function get_name(){
        return $this->name;
    }

    public function get_legs(){
        return $this->legs;
    }

    public function get_cold_blooded(){
        return $this->cold_blooded;
    }
}