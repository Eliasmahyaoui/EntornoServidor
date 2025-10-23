<?php
class Anime
{
    // Variables
    private string $title;
    private string $autor;
    private string $genre;
    private int $episodes;
    private int $year;
    private array $characters;

    // Constructor: los opcionales van al final
    public function __construct(string $title, string $autor, string $genre, int $episodes, int $year = -1)
    {
        $this->title = $title;
        $this->autor = $autor;
        $this->episodes = $episodes;
        $this->genre = $this->checkGenre($genre) ? $genre : "desconocido";
        $this->year = $this->checkYear($year) ? $year : -1;
        $this->characters = [];
    }

    // Métodos de validación
    public function checkYear(int $year): bool
    {
        return $year >= 1917;
    }

    public function checkGenre(string $genre): bool
    {
        $valid = ["Kodomo", "Shonen", "Shojo", "Seinen", "Josei"];
        return in_array($genre, $valid);
    }

    // Método para contar personajes
    public function countCharacters(): int
    {
        return count($this->characters);
    }

    // Añadir y comprobar personajes
    public function checkCharacter(Character $character): bool
    {
        foreach ($this->characters as $c) {
            if ($c->name === $character->name) {
                return true;
            }
        }
        return false;
    }

    public function addCharacter(Character $character): bool
    {
        if (!$this->checkCharacter($character)) {
            $this->characters[] = $character;
            return true;
        }
        return false;
    }

    // Getters y setters mágicos
    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        if ($property === 'genre') {
            if ($this->checkGenre($value)) {
                $this->genre = $value;
            } else {
                $this->genre = "desconocido";
            }


            if ($property === 'year') {
                if ($this->checkYear($value)) {
                    $this->year = $value;
                } else {
                    $this->year = -1;
                }
            }
        }
    }
}
