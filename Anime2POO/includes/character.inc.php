<?php


class Character
{

    //Atributos 
    private string $name;
    private int $age;
    private string $genre;
    private string $species;


    //Metodo constructor
    public function __construct(string $name, int $age, string $genre, string $species)
    {
        $this->name = $name;
        $this->genre = $genre;

        //Validamos age
        if ($this->checkAge($age)) {
            $this->age = $age;
        } else {
            $this->age = -1;
        }

        //Validamos species
        if ($this->checkSpecies($species)) {
            $this->species = $species;
        } else {
            $this->species = "desconocida";
        }
    }

    //Getter mágico

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->property;
        }
        return null;
    }

    //Setter mágico
    public function __set($property, $value)
    {
        if ($property === "age") {
            if ($this->checkAge($value)) {
                $this->property = $value;
            } else {
                $this->property = -1;
            }
        }
    }


    //Metodo checkAge

    public function checkAge($age): bool
    {
        return $age >= 0; //Al ser booleano aqui devuelvo true si la edad es mayor o igual a 0 
    }

    public function checkSpecies($species): bool
    {
        if (!ctype_digit($species)) { //El metodo ctype_digit comprueba si tiene numeros $species 
            return $species;
        }
        return false;
    }
}
