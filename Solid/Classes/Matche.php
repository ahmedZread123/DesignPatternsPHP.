<?php 

namespace Solid\Classes;

class Matche
{

    private $attack ; 
    private $defense ; 
    private $keeper ; 
    
	/**
	 * @param $attack mixed 
	 * @param $defense mixed 
	 * @param $keeper mixed 
	 */
	function __construct() {
	    $this->attack = new Attack();
	    $this->defense = new Defense();
	    $this->keeper = new Keeper();
	}

    public function start(){
        echo "Start Play" ; 
    }
}