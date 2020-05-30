<?php 

$movieName = $_GET['movieName'];
$actorName = $_GET['actorName'];
$movieDate = $_GET['movieDate'];

echo "<h1>Information about   $movieName :</h1>
<p> $actorName starred in the movie $movieName which was released in year $movieDate.</p>";?>


<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <title> "Document" </title> -->
<!-- </head>
<body> -->
    <h1>Information about <?php echo "$movieName"; ?>:</h1>
    <p><?php echo "$actorName starred in the movie  $movieName which was released in year $movieDate."?></p>
    <p><?php echo "hi dear"?></p>
<!-- </body>
 </html> -->
