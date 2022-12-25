<!-- 
    switch(parameter){
        case value1 : 
            statement;
            break;
        
        case value2 :
            statement;
            break;

        default : 
            statement;
    }
 -->

 <?php
    $fruit = "Apple";
    switch($fruit){
        case "Orange":
            echo "This is orange.";
            break;

        case "Apple" :
            echo "This is apple.";
            break;

        default :
            echo "This is other fruit.";
    }
 ?>