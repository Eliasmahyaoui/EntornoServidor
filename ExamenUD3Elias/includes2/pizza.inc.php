<?php

class Pizza {

    //propiedades
    private string $name;
    private float $basePrice;
    private string $size;


    //Metodo constructor 
    public function __construct( string $name, float $basePrice,?string $size)
    {
        $this->name= $name;
        $this->basePrice = $basePrice;
        $this->size= "M";


         //Validacion de checkSize en el constructor
         if ($this->checkSize($size)) {
            $this->property= $size;
        }else {
            $this->property="M";
        }

    }



    //Metodo getter magico
     public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }

    //Mtodo setter magico 

    public function __set($property, $value){
        if (isset($this->property)) {
           $this->$property= $value;
        }


        //Validacion de checkSize en el set 
        if ($this->checkSize($value)) {
            $this->property= $value;
        }else {
            $this->property= "M";
        }



    }

    //Metodo checkSize

    public function checkSize($size){

        if ($size=="S" || $size=="M" || $size=="L" ||$size=="XL" ) {
            return $size;
        }else{
            return $size= "M";
        }


    }
}