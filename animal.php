<?php
class Animal {

    //property
    public $name;
    public $legs = 2;
    public $cold_blooded = false;

    //contructor
    public function __construct($name){
        $this->name = $name;
        

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