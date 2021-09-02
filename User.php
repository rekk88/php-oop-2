<?php

class User{
    public $id;
    public $psw;
    public $email;
    //le propietà statiche sono legate alla classe e non all'oggetto
    // public static $counter = 0; 

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

    // static function getCounter()
    // {
    //     return self::$counter;
    // }


    function __construct($_id,$_psw , $_email){
        // self::$counter++;
        $this->id = $_id;
        $this->psw = $_psw;
        $this->email = $_email;

    }
}

?>