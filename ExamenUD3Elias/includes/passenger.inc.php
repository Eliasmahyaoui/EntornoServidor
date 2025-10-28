<?php

class Passenger
{

    //atributos
    private string $name;
    private float $balance;
    private int $freekm;
    private int $travels;
    private bool $nextFree;

    //Metodo constructor 
    public function __construct(string $name, ?int $balance, ?int $freeKm, ?int $travels, ?int $nextFree)
    {
        $this->name = $name;
        $this->balance = 0;
        $this->freekm = 5;
        $this->travels = $name;
        $this->nextFree = $name;

        
        //Validacion de travels, balance, freekm
        if ($travels<=0){
            $travels=0;
        }
        
        if ($balance<=0) {
            $balance= 0;
        }

        if ($freeKm<=0) {
            $freeKm= 0;
        }



    }

    //metodo travelRegistration
    public function travelRegistration()
    {
        //return count();
        
    }
}
