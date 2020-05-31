


<?php


function show($K, $V){
    $realis= array(
        'Spielberg' => ['Le pont des espions', 'The Post', 'film3', 'film4', 'filmX'],
        'Christopher Nolan' => ['Dunkerque', 'Quai', 'film7', 'film8', 'filmY'],
        'Martin Scorsese' => ['Le Loup de Wall Street', 'Hugo', 'film11', 'film12', 'filmZ'],
        'realisateur4' => ['film13', 'film14', 'film15', 'film16', 'filmA'],
        'realisateur5' => ['film17', 'film18', 'film19', 'film20', 'filmF']
    );
    $rand_key = array_rand($realis, $K);
    $randV = array_rand($rand_key, $V);
    
        foreach($rand_key as $value){
               echo "<h2>les films de $value :</h2>";
            foreach($randV as $change){
                echo $realis[$value][$change] . "<br>";
            }
        }
        
}
show(5,3);

?>
