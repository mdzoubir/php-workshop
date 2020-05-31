<?php


function show(){
    $realis= [
        'realisateur1' => ['film1', 'film2', 'film3', 'film4'],
        'realisateur2' => ['film5', 'film6', 'film7', 'film8'],
        'realisateur3' => ['film9', 'film10', 'film11', 'film12'],
        'realisateur4' => ['film13', 'film14', 'film15', 'film16'],
        'realisateur5' => ['film17', 'film18', 'film19', 'film20']
    ];
    $i = 0;
    
    $f = $i + 1;
        foreach($realis as $key => $value){
            echo "<h2>les films de $key </h2>";
            echo "$value[$i] <br> $value[$f]"; 
            $i++;
        }
        
}show();

?>



