<?php
class Persona {

    // Atributos 
    private string $age;
    private string $name;
    private string $mail;
    private bool $active;
    private string $country;

    // Constructor
    public function __construct(string $age, string $name, string $mail, string $country) {
        $this->age = $age;
        $this->name = $name;
        $this->mail = $mail;
        $this->active = true; // antes usabas $active sin recibirlo
        $this->country = $this->checkCountry($country);
    }

    // Getters mágicos
    public function __get(string $property): mixed {
        if (isset($this->$property)) {
            return $this->$property;
        }
        return null;
    }

    // Setters mágicos
    public function __set(string $property, mixed $value): void {
        if (property_exists($this, $property)) {
            if ($property === 'country') {
                $this->country = $this->checkCountry($value);
            } else {
                $this->$property = $value;
            }
        }
    }

    // Método que devuelve el nombre con la primera letra en mayúscula
    public function nameFirstLetterUC(): string {
        return ucfirst(strtolower($this->name)); // era uc_first -> incorrecto
    }

    // Método privado que valida el país
    private function checkCountry(string $country): string {
        $countries = ['España', 'Italia', 'Francia'];

        if (in_array($country, $countries)) {
            return $country;
        } else {
            return 'España';
        }
    }
}
?>
