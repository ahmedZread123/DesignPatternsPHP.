<?php 

namespace Behavioral\Command ;
use Behavioral\Command\Command ;



class RevertCommand implements Command
{
    private GitReceiver $getReceiver ;

	
	function __construct(GitReceiver $getReceiver) {
	    $this->getReceiver = $getReceiver;
	}

    
    public function execute(){
        $this->getReceiver->getRevert(); 
    }
}