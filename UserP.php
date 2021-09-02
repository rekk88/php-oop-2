<?php
require_once 'User.php';
class UserP extends User{
    public $discount;

    function setDiscount($discount){
        $this->discount = $discount;
    }
    function getDiscount(){
        return $this->discount;
    }

    function __construct($_psw, $_email, $_discount){
        parent::__construct($_psw , $_email); //richiamo il costruttore della classe padre
        $this->discount = $_discount;
        
    }

}

?>