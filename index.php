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
include_once 'UserP.php';
$shopOne = new Shop(12);

echo $shopOne->nUtenti;
var_dump($shopOne);

$userOne = new User("cya","rakaro@gmail.com");

var_dump($userOne);

$userTwoP = new User("cyayy","akaro@gmail.com",20);

var_dump($userTwoP);

?>