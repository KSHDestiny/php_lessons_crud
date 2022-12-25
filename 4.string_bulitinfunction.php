<!-- strlen
str_word_count
strrev
str_shuffle
strpos(string,within)
str_replace(find,new,string)
strtoupper
strtolower
ucfirst
ucwords
strip_tags
trim -->

<?php 
    $name = "kaung sat";
    
    echo strlen($name) . "<br>";    // 9
    echo str_word_count($name) . "<br>";     // 2
    echo strrev($name) . "<br>";    // tas gnuak
    echo str_shuffle($name) . "<br>";    // tsu naakg
    echo strpos($name,"sat") . "<br>";   // 6
    echo str_replace("sat","sithu",$name) . "<br>";  // kaung sithu
    echo strtoupper($name) . "<br>";     // KAUNG SAT
    echo strtolower($name) . "<br>";     // kaung sat
    echo ucfirst($name) . "<br>";    //  Kaung sat
    echo ucwords($name) . "<br>";    // Kaung Sat

    $test = "<h1><i>This is testing</i></h1>";
    echo $test;
    echo strip_tags($test) . "<br>";

    $string = "     Hello Mello     ";
    var_dump ($string);
    var_dump (trim($string));
?>