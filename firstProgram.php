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
$details="Hi I am Ahmad Zia Wasi";
$condition=true;
$itertion=0;
    function callback(){
        global $details, $condition, $itertion;
        if($condition && $itertion<5){
            print $details. "<br>";
            $itertion+=1;
            callback();
         }
    }
    callback()
?>
    
</body>
</html>