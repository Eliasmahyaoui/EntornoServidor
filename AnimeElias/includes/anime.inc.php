
<?php
class Anime
{
    //Variables 
    private string $title;
    private string  $autor;
    private int $year;
    private string $genre;
    private int $episodes;
    private array $characters;

    //constructor

    public function __construct(string $title, string $autor, int $year=-1, string $genre,int $episodes)
    {

        $this->title = $title;
        $this->autor = $autor;
        $this->year = $year;
        $this->genre = $genre;
        $this->episodes = $episodes;
    
         // Validar y asignar género usando checkGenre
        if ($this->checkGenre($genre)) {
            $this->genre = $genre;
        } else {
            $this->genre = "desconocido";
        }

        // Validar y asignar año usando checkYear
        $this->year = $this->checkYear($year) ? $year : -1;
    }

    //Metodos 

    public function checkYear($year): bool
    {
        if ($year >= 1917) {
            return true;
        }
        return false;
    }

    function checkGenre($genre): bool
    {
        if ($genre== "Kodomo" || $genre== "Shonen"|| $genre== "Shojo"||$genre== "Seinen"|| $genre== "Josei" ) {
           return true;
        }else{
            return false;
        }
    }

    public function checkCharacter(Character $character): bool
    {
        //Esto  comprueba si la variable no esta vacia  
        if (isset($this->characters)==true) {
            return in_array($character, $this->characters);
        }else {
            return false;
        }
    }


   public function countCharacter(): int
   {

        return count($this->characters);

   }

   public function addCharacter( Character $character): bool
   {

        //Esto  comprueba si la variable no esta vacia  
        if (isset($this->characters)==true) {
            return in_array($character, $this->characters);
        }else {
            return false;
        }


   }

   public function removeCharacter(): mixed
   {


   }

    //getters y setter magicos

  public function __set($property, $value)
{
    // Validar genre
        if ($property === 'genre') {
            $this->genre = $this->checkGenre($value) ? $value : "desconocido";
            return;
        }

         // Validar año
        if ($property === 'year') {
            $this->year = $this->checkYear($value) ? $value : -1;
            return;
        }

        // Para otras propiedades privadas
        $this->$property = $value;
}



    public function __get($property)
    {
        return  $this->$property;
    }




}








?>