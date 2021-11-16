<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// $details="Hi I am Ahmad Zia Wasi";
// $condition=true;
// $itertion=0;
//     function callback(){
//         global $details, $condition, $itertion;
//         if($condition && $itertion<5){
//             print $details. "<br>";
//             $itertion+=1;
//             callback();
//          }
//     }

// function arrays(){
//     $fruits=["Apple", "Banana"];
//     array_push($fruits, "Strawberry");
//     foreach($fruits as $eachFruit){
//         print $eachFruit. "<br>";
//     }
// }
// class fruit{
//     public $name;
//     public $color;
//     public $price;
//     function set_name($getName){
//         $this->name=$getName;
//     }
//     function get_name(){
//         return $this->name;
//     }
// }
// $apple=new fruit();
// $banana=new fruit();
// $apple->color="red";
// $apple->set_name("Apple");
// $banana->set_name("Banana");
// var_dump($apple instanceof fruit);
// print $apple->color;


    // callback();
    // arrays();
    class vehicle{
        public $brand_Name;
        public $brand_Year;
        Public $color;
        public $price;
        function __construct($brand_Name, $brand_Year, $color, $price )
        {
            $this->brand_Name=$brand_Name;
            $this->brand_Year=$brand_Year;
            $this->color=$color;
            $this->price=$price;
        }
        // function __destruct()
        // {
        //     print "this Vehicle is {$this->brand_Name}.";

        // }


    }
    
    $camery=new vehicle("Camery", "2011", "White", "$22,000" );
    $corolla=new vehicle("Corolla", "1996", "Golden", "$12,000" );
   
    foreach($camery as $object_content){
        $length=strlen($object_content);
       
        print "$object_content (length of: $length)  <br>";
        //break;
        // print ` $length <br>`;
        
        //echo "<p>$object_content </p> ";
    }
    // $hi="heAhmad";
    // print $hi[1];
?>

</body>
</html>