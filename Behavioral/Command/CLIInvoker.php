<?php 

namespace Behavioral\Command ;
use Behavioral\Command\Command ;



class CLIInvoker 
{
    private Command $command ; 
    public function setCommand(Command $command)
    {
        $this->command = $command ; 
    }

    public function run(){
        $this->command->execute();
    }
}