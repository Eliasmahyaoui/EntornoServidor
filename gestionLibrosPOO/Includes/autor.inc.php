<?php

class Autor
{

    //Atributos
    private string $nombre;
    private string $email;

    //Metodo constructor
    public function __construct(string $nombre, string $email)
    {
        $this->nombre = $nombre;
        $this->email = $email;
    }
    //metodo magico get
    public function __get($property)
    {
        if (property_exists($this, $property)) { //Verifica que la propiedad $property existe en esa clase
            return $this->property;
        }
    }

    //Metodo mágico set
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->property = $value;
        }
    }

    //Metodo de datos
    public function Datos(){
        
    
    }
}
