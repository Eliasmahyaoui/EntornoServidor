<?php

class Coche
{

    //Atributos 
    private  string $marca;
    private  string $modelo;
    private  int $velocidad;


    //constructor
    public function __construct(string $marca, string $modelo, )
    {
        $this->marca = $marca;
        $this->marca = $modelo;
        $this->velocidad = 0;
    }

    public function acelerar($cantidad) 
    {
        $this->$velocidad+=$cantidad;

    }

    public function frenar($cantidad) 
    {
        $this->$velocidad-=cantidad;

        if ($this->$velocidad<=0) {
            $this->$velocidad==0;
        }


    }

    public function mostrarInfo()
    {

        echo "La marca del coche es: $this->marca <br>";
        echo "El modelo del coche es: $this->modelo <br>";
        echo "La velocidad del coches es: $this->velocidad<br>";

    }


}
