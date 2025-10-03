
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

        //Metodo checkAge desde el constructor
        if ($this->checkAge($age) == true) {
            $this->age = $age;
        } else {
            $this->age = -1;
        }

        if ($this->checkSpecies($species) == true) {
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
        if ($property($this, $property)) {
            if ($property === 'age') {
                $this->checkAge($value);
                $this->age = $value; // asignación directa desde dentro de la clase está bien
                return;
            }
            // Asignación directa para cualquier propiedad declarada
            $this->$property = $value;
            return;
        } else {



            if ($property === 'species') {
                if ($this->checkSpecies($value)) {
                    $this->species = $value;
                } else {
                    throw new \Exception("Especie inválida: $value");
                }
                return;
            }

            $this->$property = $value;
        }
    }


    public function __get($property)
    {
        return  $this->$property;
    }
}


?>