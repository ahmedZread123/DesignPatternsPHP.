<?php 

namespace Behavioral\Command ; 

class GitReceiver 
{
    private $gitLog = [] ; 
    
	/**
	 * @return mixed
	 */
	function getGitLog() {
		return $this->gitLog;
	}
    function getCommit() {
		 $this->gitLog[] = "Git - Commit";
	}

    function getAdd() {
		 $this->gitLog[] = "Git - Add";
	}

    function getPush() {
		 $this->gitLog[] = "Git - Push";
	}
    function getRevert() {
		 $this->gitLog[] = "Git - Revert";
	}



}
