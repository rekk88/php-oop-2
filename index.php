<?php
class Shop{
    public $nUtenti;
    
    function setNUtenti($nUtenti){
        $this->nUtenti = $nUtenti;
        getNUtenti();
    }
    function getNUtenti(){
        return $this->nUtenti;
    }

    function __construct($_nUtenti){
        $this->nUtenti = $_nUtenti;
    }


}
$shopOne = new Shop(12);

echo $shopOne->nUtenti;
var_dump($shopOne);

?>