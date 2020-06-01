<?php
$par1 = 5;
$par2 = 2;
// $i = 3;
function factoriel($par1){
      $fact = 1;
      for($i=$par1; $i>0;$i--){
        echo "$fact * $i =";
        echo $fact * $i ."<br>";
        $fact = $fact * $i ;   
        
     }
   echo "<h4>la factorial de $par1! = $fact </h4>";
   
} factoriel($par1);


// function some($par1, $par2){
//     echo "<h4>la some de $par1 + $par2 :</h4>";
//     echo $par1 + $par2;
// }some($par1,  $par2);
// function isPremier($i)
// {
//    if ($) {
//        # code...
//    }
// }




















?>