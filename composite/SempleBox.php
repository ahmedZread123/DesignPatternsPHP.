<?php 

namespace composite ;

class SempleBox implements ProductInterface
{
    private $price ; 

    public function __construct($price)
    {
        $this->price = $price ; 
    }
    public function getPrice(){
        return $this->price ; 
    }

}