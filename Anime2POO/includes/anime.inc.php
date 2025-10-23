<?php

class Anime
{
    private string $title;
    private string $autor;
    private int $year; 
    private string $genre;
    private int $episodes;
    private array $characters; // Almacena los personajes (inicia vacía)

    // 🔹 Constructor con todas las propiedades excepto characters
    public function __construct(string $title, string $autor, int $year, string $genre, int $episodes)
    {
        $this->title = $title;
        $this->autor = $autor;
        $this->episodes = $episodes;
        $this->characters = []; // Se inicializa vacía

        // Validar género
        if ($this->checkGenre($genre)) {
            $this->genre = $genre;
        } else {
            $this->genre = "desconocido";
        }

        // Validar año
        if ($this->checkYear($year)) {
            $this->year = $year;
        } else {
            $this->year = -1;
        }
    }

    // 🔹 Getters mágicos
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property; // ✅ Corregido (antes era $this->property)
        }
        return null;
    }

    // 🔹 Setters mágicos (no se usa para characters)
    public function __set($property, $value)
    {
        if ($property === "year") {
            if ($this->checkYear($value)) {
                $this->$property = $value;
            } else {
                $this->$property = -1;
            }
        }

        if ($property === "genre") {
            if ($this->checkGenre($value)) {
                $this->$property = $value;
            } else {
                $this->$property = "desconocido";
            }
        }

        // Para cualquier otra propiedad excepto characters
        if ($property !== "characters" && $property !== "year" && $property !== "genre") {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
        }
    }

    // 🔹 Comprueba si el año es válido
    public function checkYear($year): bool
    {
        return $year >= 1917;
    }

    // 🔹 Comprueba si el género es válido
    public function checkGenre($genre): bool
    {
        $validGenres = ["Kodomo", "Shonen", "Shojo", "Seinen", "Josei"];
        return in_array($genre, $validGenres);
    }

    // 🔹 Comprueba si el personaje ya existe en el anime
    public function checkCharacter(Character $character): bool
    {
        foreach ($this->characters as $c) {
            if ($c->name === $character->name) {
                return true; // Ya existe
            }
        }
        return false; // No existe
    }

    // 🔹 Devuelve cuántos personajes hay en el anime
    public function countCharacters(): int
    {
        return count($this->characters);
    }

    // 🔹 Añade un personaje si no existe ya
    public function addCharacter(Character $character): bool
    {
        if (!$this->checkCharacter($character)) {
            $this->characters[] = $character;
            return true;
        }
        return false;
    }

    // 🔹 Elimina un personaje si existe y lo devuelve, o devuelve false si no existe
    public function removeCharacter(string $characterName): Character|bool
    {
        foreach ($this->characters as $index => $c) {
            if ($c->name === $characterName) {
                $removed = $c;
                unset($this->characters[$index]);
                $this->characters = array_values($this->characters); // Reindexar el array
                return $removed;
            }
        }
        return false;
    }
}
