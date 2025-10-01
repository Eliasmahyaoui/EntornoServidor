
<?php
class character
{
    //Variables 
    private string $name;
    private int  $age;
    private string $genre;
    private string $species;

    //constructor

    public function __construct(string $name, int $age = -1, string $genre, string $species = "humano")
    {

        $this->name = $name;

        $this->genre = $genre;
        $this->species = $species;


        if (checkAge($age) == true) {
            $this->age = $age;
        } else {
            $this->age = -1;
        }

        if (checkSpecies($species) == true) {
            $this->species = $species;
        } else {
            $this->species = 'desconocida';
        }
    }

    //Metodos 

    public function checkAge($age)
    {
        $encontrado = false;
        if ($age < 0) {
            echo 'Es negativo';
            $encontrado = true;
            return $age;
        }
    }

    function checkSpecies($especie)
    {

        return ctype_digit($especie);
    }


    //getters y setter magicos

    public function __set($property, $value)
    {
        $this->$property = $value;
        checkAge($age); // esto rtiene que ser diferente
        checkSpecies(); //Esto tiene que ser diferete
    }

    public function __get($property)
    {
        return  $this->$property;
    }
}








?>