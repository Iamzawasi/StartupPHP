<?php

// We can not create object for an Abstract Clas.
// Abstract class must contain at least one abstract function or method.
// abstract method should be declard but not implement/ it should not have body.
// the extended from abstract class must have the all the abstract methods of it's parent class.
// abstract class is just like rules for child classes. so which method must the child contains if its extend from parent abstract.


// include_once "";
abstract class  bankAcccount{
    public $accountBalnace;
    public  $acType;
    function __construct( $accountBalnace, $acType)
    {
        $this->accountBalnace=$accountBalnace;
        $this->acType=$acType;
    }
    abstract public function accounType();

}
class currentAccount extends bankAcccount{
    function accounType(){
        return  $this->acType." ". gettype($this->accountBalnace);
    }
}

$printdetail=new currentAccount(5000.00, "Current Account");
print $printdetail->accounType();

$float=1245.01;
print  "<br>".$float;
print  "<br>". gettype($float);
settype($float, "string");
$float=256;
print  "<br>". gettype($float);
?>