<?php

class User{
    public $id;
    public $psw;
    public $email;
    
    
    // id setter & getter
    function setId($id){
        $this->id = $id;
    }
    function getId(){
        return $this->id;
    }
    // psw setter & getter
    function setPsw($psw){
        $this->psw = $psw;
    }
    function getPsw(){
        return $this->psw;
    }
    // email setter & getter
    function seteMail($email){
        $this->email = $email;
    }
    function geteMail(){
        return $this->email;
    }


    function __construct($_psw , $_email){
        $this->id = $id + 1;
        $this->psw = $_psw;
        $this->email = $_email;

    }
}

?>