<?php 

namespace Behavioral\Command ;
use Behavioral\Command\Command ;



class DeployCommand implements Command
{
    private GitReceiver $getReceiver ;

	
	function __construct(GitReceiver $getReceiver) {
	    $this->getReceiver = $getReceiver;
	}

    
    public function execute(){
        $this->getReceiver->getAdd() ; 
        $this->getReceiver->getCommit() ; 
        $this->getReceiver->getPush() ; 
    }
}