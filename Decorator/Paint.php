<?php 

namespace Decorator ; 

class Paint implements PaintingInterface
{

    private $color = 'Red' ;
    public function paint(Car $car){
        $car->setColor($this->color) ; 
        return $car  ; 

    }
    

}