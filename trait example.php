<?php
/// we dont have multiple inheritance in PHP but using trait we can overcome with this issue
// we can have properites in trait but not in interface
// we use the term use to inherit a tread in the child class
trait jobscoaches{
    protected $coachName;
     function getCoachName($namcoachNamee){
        $this->coachName=$namcoachNamee;
     }
     function printCName(){
        return $this->coachName;
    }
}
trait participant{
    protected $participantName;
     function getPartName($participantName){
        $this->participantName=$participantName;
     }
     function printPName(){
        return $this->participantName;
    }
}
class firms{
    use jobscoaches, participant;
}
$DCM= new firms();
$DCM->getCoachName("Zia Wasi ");
$DCM->getPartName("Mark Lukas");


print $DCM->printCName();
print "<br>". $DCM->printPName();

?>