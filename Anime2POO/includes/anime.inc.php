<?php

class Anime
{
    private string $title;
    private string $autor;
    private  int $year; //por defecto el valor -1
    private string $genre;
    private int $episodes;
    private array $personajes;




    //metodo constructor

    public function __construct(string $title, string $autor, int $year, string $genre, int $episodes, array $personajes)
    {
        $this->title = $title;
        $this->autor = $autor;
        $this->year = -1;  //por defecto el valor -1
        $this->genre = $genre;
        $this->episodes = $episodes;
    }


    //metodo getter 

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->property;
        }
        return null;
    }

    public function __set($property, $value) {}


    //Metodo checkYear

    public function checkYear($year): bool
    {
        return $year >= 1917;
    }

    //Metodo checkGenre
    public function checkGenre($genre): bool
    {
        if ($genre == "Kodomo" || $genre == "Shonen" || $genre == "Shojo" || $genre == "Seinen" || $genre == "Josei") {
            return true;
        } else {
            return false;
        }
    }

    //metoodo checkCharacter

    public function checkCharacter()
    {
        


    }



}
