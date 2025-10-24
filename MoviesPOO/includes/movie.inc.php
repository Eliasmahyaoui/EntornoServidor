<?php

class Movie
{
    //Propiedades
    private string $title;
    private string $director;
    private int $year;
    private string $genre;
    private int $duration;
    private array $actors;


    //Metodo constructor


    public function __construct(string $title, string $director, int $year, string $genre, int $duration)
    {

        $this->title = $title;
        $this->director = $director;
        $this->duration = $duration;
        $this->actors = [];

        //Validando año 
        if ($this->checkYear($year)) {
            $this->property = $year;
        } else {
            $this->property = -1;
        }

        //Validando genero
        if ($this->checkGenre($genre)) {
            $this->property = $genre;
        } else {
            $this->property = "Desconocido";
        }
    }



    //Getter magico
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }

        return null;
    }



    //Setter magico 
    public function __set($property, $value)
    {
        $this->$property = $value;;



        if ($property == "year") {
            if ($this->checkYear($value)) {
                $this->$property = $value;
            } else {
                $this->$property = -1;
            }
        }


        if ($property == "genre") {
            if ($this->checkGenre($value)) {
                $this->$property = $value;
            } else {
                $this->$property = "desconocido";
            }
        }
    }



    //Metodo checkYear
    public function checkYear($year): bool
    {
        return $year >= 1895;
    }


    //Metodo checkGenre
    public function checkGenre($genre): bool
    {

        if ($genre == "Accion" || $genre == "Comedia" || $genre == "Drama" || $genre == "Ciencia ficcion" || $genre == "Terror") {
            return true;
        }
        return false;
    }

    public function checkActor(Actor $actor): bool

    {

        // Recorremos todos los actores 
        foreach ($this->actors as $a) {
            //Comprobamos si esta el actor mediante el nombre
            if ($a->name === $actor->name) {
                return true;
            }
        }
        return false; // El actor no está

    }

    public function addActor(Actor $actor): bool
    {
        if (!$this->checkActor($actor)) {
            $this->actors[] = $actor;
            return true;
        }
        return false;
    }

    public function countCharacter()
    {
        
    }
}
