
<?php
class Anime
{
    //Variables 
    private string $title;
    private string  $autor;
    private int $year;
    private string $genre;
    private int $episodes;
    $nombres=[];

    //constructor

    public function __construct(string $title, string $autor, int $year=-1, string $genre,int $episodes)
    {

        $this->title = $title;
        $this->autor = $autor;
        $this->year = $year;
        $this->genre = $genre;
        $this->episodes = $episodes;


      
    }

    //Metodos 

    public function checkYear($year): bool
    {
        if ($year >= 1917) {
            return true;
        }
        return false;
    }

    function checkGenre($genre)
    {
        $encontrado= false;
        if ($genre== "Kodomo" || $genre== "Shonen"|| $genre== "Shojo"||$genre== "Seinen"|| $genre== "Josei" ) {
           $encontrado= true;
        }else{
            $encontrado= false;
        }
    }


    //getters y setter magicos

    public function __set($property, $value)
    {
        $this->$property = $value;
        $this->$checkAge($age)=$value; // esto rtiene que ser diferente
        checkSpecies(); //Esto tiene que ser diferete
    }

    public function __get($property)
    {
        return  $this->$property;
    }
}








?>