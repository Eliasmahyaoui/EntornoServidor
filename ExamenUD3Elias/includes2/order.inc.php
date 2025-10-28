
<?php

class Order {

    //Propiedades
    private string $name;
    private float $discount;
    private float $iva;
    private array $pizzas;
    private array $customers;


    //Metodo constructor 

    public function __construct(string $name, ?float $discount, ?float $iva)
    {
        $this->name = $name;
        $this->discount= 0; //por defecto 
        $this->iva= 10; //por defecto 
        $this->pizzas= [];
        $this->customers= [];

    }

 //Metodo getter magico
     public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return null;
    }

    //Mtodo setter magico 

    public function __set($property, $value){
        if (isset($this->property)) {
           $this->$property= $value;
        }
    }

    //Metodo finalPrice

    public function finalPrice(){

        //Primero debe calcular 
        

    }

   
    //Metodo addPizza
    public function addPizza(Pizza $pizzas){
        
        if (!isset($this->pizzas)) { //si no existe ninguna pizza 
            $this->pizzas[]= $pizzas; //metela una pizza en el array 
            return true; 
        }else{
            return false;
        }
        
        
        
    }

    //Metodo add Customer 
    public function addCustomer(Customer $customers){
        
        if (!isset($this->customers)) { //si no existe ningun cliente  
            $this->customers[]= $customers; //metela un cliente  en el array 
            return true; 
        }else{
            return false;
        }

    }
}