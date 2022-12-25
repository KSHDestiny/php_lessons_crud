<!-- if(condition){
    statement;
} elseif(condition){
    statement;
} else {
    statement;
} -->

<?php 
    $x = 50;
    if($x < 50){
        echo "The value is lower than 50.";
    } elseif($x == 50){
        echo "The value is 50.";
    } else {
        echo "The value is greater than 50";
    }
?>