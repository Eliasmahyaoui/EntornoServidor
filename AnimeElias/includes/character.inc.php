<?php
class Character
{
    public string $name;
    public string $species;
    public int $age;
    public string $village;

    public function __construct(string $name, string $species, int $age, string $village)
    {
        $this->name = $name;
        $this->species = $species;
        $this->age = $age;
        $this->village = $village;
    }
}
?>
