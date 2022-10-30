<?php

namespace Test ;

use Behavioral\Command\CLIInvoker;
use Behavioral\Command\DeployCommand;
use Behavioral\Command\GitReceiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase 
{
    private $invocker ; 
    protected function  setUP() :void
    {
        $this->invocker = new CLIInvoker() ; 

    }
    function testCreateNewCommand(){
        $receiver = new GitReceiver() ; 
        $command = new DeployCommand($receiver);
        $this->invocker->setCommand($command);
        $this->invocker->run() ;

        self::assertCount(3 , $receiver ->getGitLog()) ; 
    }
}