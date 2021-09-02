<?php

class GiftCard{

    public $credit;
    public $date;
    

    // setter & getter
    function setCredit($credit){
        $this->credit = $credit;
    }
    function getCredit(){
        return $this->credit;
    }
    function setDate($date){
        $this->date = $date;
    }
    function getDate(){
        return $this->date;
    }

    
    function __construct($_credit , $_date){
        $this->credit = $_credit;
        $this->date = $_date;
    }

}

?>