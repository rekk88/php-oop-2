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
include_once 'GiftCard.php';
$id = 0 ;
$shopOne = new Shop(12);

echo $shopOne->nUtenti;
var_dump($shopOne);

$userOne = new User($id++,"cya","rakaro@gmail.com");

var_dump($userOne);

$userTwoP = new UserP($id++,"cyayy","akaro@gmail.com",20);

var_dump($userTwoP);

$gift = new GiftCard(30 , "20/02/2020");
var_dump($gift);

echo "User " , $userOne->email, "  got an in-store credit of : ", $gift->credit ,"<br>"; 

echo User::getCounter();

?>