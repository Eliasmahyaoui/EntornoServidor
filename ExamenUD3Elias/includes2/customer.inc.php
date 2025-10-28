<?php

class Customer
{

    private string $name;
    private bool $member;


    //Metodo constructor 

    public function __construct(string $name, ?bool $member)
    {
        $this->name = $name;
        $this->member = false;
    }


    //getters magicio 


    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }

    //setter magico 

    public function __set($property, $value){
        if (isset($this->property)) {
           $this->$property= $value;
        }
    }


    
}
