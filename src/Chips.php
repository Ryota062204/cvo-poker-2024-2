<?php



namespace Src;

class Chips 
{


 
    private string $color;
    private int $value;
    private ?int $quantity = null;

    public function __construct($color, $value, $quantity){
        $this->colors = $color;
        $this->value = $value;
        $this->quantity = $quantity;


    }


    public function getColor()
    {
        return $this->color;
    }
    
    public function getvalue()
    {
        return $this->value;
    }
    
    public function getQuantity()
    {
        return $this->quantity;
    }

   
    
    public function setQuantity()
    {
        $this->quantity = $quantity;
    }

    public function setColor()
    {
        $this->color = $color;
    }
    
    public function setvalue()
    {
        $this->value = $value;
    }
   
    public function totalValue(){

        return $this->value * $this->quantity;
    }

    public function totalQuantity(){

        return $this->qauntity;
    }
    
    






    }

    $chips = [new chips ('blue',1,1), new chips ('red',2,1), new chips ('groen',5,1), new chips('white' ,10,1), new chips('black', 15,1)];





    
    


//chips kleuren blauw, wit, rood en zwart

