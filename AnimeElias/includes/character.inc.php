<?php
class Character
{
    private string $name;
    private int $age;
    private string $species;

    public function __construct(string $name, int $age = -1, string $species = "humano")
    {
        $this->name = $name;

        // Validar edad
        $this->age = $this->checkAge($age) ? $age : -1;

        // Validar especie
        $this->species = $this->checkSpecies($species) ? $species : "desconocida";
    }

    // Validar edad (no negativa)
    public function checkAge(int $age): bool
    {
        return $age >= 0;
    }

    // Validar especie (no números)
    public function checkSpecies(string $species): bool
    {
        return !preg_match('/[0-9]/', $species);
    }

    // Getters y setters mágicos
    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        if ($property === "age") {
            $this->age = $this->checkAge($value) ? $value : -1;
        } elseif ($property === "species") {
            $this->species = $this->checkSpecies($value) ? $value : "desconocida";
        } else {
            $this->$property = $value;
        }
    }
}
?>
