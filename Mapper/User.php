<?php 

namespace Mapper ; 

class User 
{
    private $username , $id , $password ; 

    public function setUserName($username){
        $this->username = $username ; 
    }
    public function getUserName(){
        return  $this->username ;  
    }

    public function setId($id){
        $this->id = $id ; 
    }
    public function getId(){
        return  $this->id ; 
    }

    public function setPassword($password){
        $this->password = $password ; 
    }
    public function getPassword(){
        return  $this->password ;
    }


}