<?php
//function  calculer la factorile d'un nomber
$par1 = 5;
function factoriel($par1){
      $fact = 1;
      for($i=$par1; $i>0;$i--){
        echo "$fact * $i =" .$fact * $i. "<br>";
        $fact = $fact * $i ;   
        
     }
   echo "<h4>la factorial de $par1! = $fact </h4>";
   
} factoriel($par1);

//function calculer la somme de plusuer valeur ;
function somme(){
  $a = array(4,5);
  echo array_sum($a). "<br>" ;
}somme();


//fonction pour voir si un nombre entré en paramètre est premier ou non ;
function test($x){
  for ($i=2; $i < $x ; $i++) { 
    
    if($x % $i==0){
      $test =1;
    }
  }if (isset($test)) {
    echo "$x n'est pas un nomber premier";
  } else {
    echo "$x est un nomber premier";
  } 
}

call_user_func('test', 10);











?>