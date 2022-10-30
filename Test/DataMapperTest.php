<?php 

namespace Test ;

use Mapper\DataMapper;
use PHPUnit\Framework\TestCase;
use Mapper\StorageManager ; 

class DataMapperTest extends TestCase 
{
    private $manager ;
    private array $data ; 
    protected function setUp() :void
    {
        $this->data = [2 => ['userName'=>'admin' , 'password'=>'123']] ;
        $this->manager = new  StorageManager($this->data) ; 
    }

    public function testCanGetUserByID(){
        $dataMapper = new DataMapper($this->manager) ; 
        $user = $dataMapper->findByID(1) ; 
        $this->assertEquals($this->data[1] , $user) ;
    }


}