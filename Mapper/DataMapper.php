<?php 
namespace Mapper ; 
use Mapper\StorageManager ; 
class DataMapper 
{
    private $manager ;

    public function __construct(StorageManager $manager)
    {
        $this->manager = $manager ; 
    }

    public function findByID($id)
    {
       return  $this->manager->find($id) ;
    }

    public function saveUser(array $user ){
        return $this->manager->save($user) ; 
    }


}