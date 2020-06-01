<?php
//function  factorile
$par1 = 5;
function factoriel($par1){
      $fact = 1;
      for($i=$par1; $i>0;$i--){
        echo "$fact * $i =";
        echo $fact * $i ."<br>";
        $fact = $fact * $i ;   
        
     }
   echo "<h4>la factorial de $par1! = $fact </h4>";
   
} factoriel($par1);


// function some($v){
//     $a = array();
//     array_push($a, $v);
//     echo "sum(a) = " . array_sum($a) . "\n";

//     $b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
//     echo "sum(b) = " . array_sum($b) . "\n";

// }some(5);

// function somme
function somme(){
    $a = array(4,5);
    $end = end($a);
      for($i=0; $i>=$end;$i++){
        $result =  array_sum($a[$i]);
        
     }
     echo  $result;
     
//    echo "<h4>la factorial de $par1! = $fact </h4>";
}somme();


















?>