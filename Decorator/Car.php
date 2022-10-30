<?php 

namespace Decorator ; 

class Car 
{
    private $color = '' ; 
    
	/**
	 * @return mixed
	 */
	public function getColor() {
		return $this->color;
	}
	
	
	public function setColor($color){
		$this->color .= $color;
	}
}