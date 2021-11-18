<?php
// interface can not have properties and abstract can. (diff)
// mehtods in interface must be public (diff)
// like abstracts we can not create object of interface.
// interface is similar like abstract which enforce the availability of the methods that a class should have.
interface animal{
    public function getDescripton($name, $Domesticated );
    public function PrintDescription();
    
}
class bird implements animal{
    public $name;
    public $Domesticated;
    function getDescripton($name, $Domesticated)
    {
        $this->name=$name;
        $this->Domesticated=$Domesticated;
    }
    function PrintDescription(){
        $string="";
        $this->Domesticated? $string="It's domesticated": $string="it's NOT domesticated";
        print "This bird is called {$this->name} and {$string}";
    }
}
$falcon=new bird();
$falcon->getDescripton("Falcon", False);
$falcon->PrintDescription();

//output
/// This bird is called Falcon and it's NOT domesticated

?>