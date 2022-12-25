<!-- define(constName,value) -->

<?php 
    define("NAME","kaung sat"); // NAME = "kaung sat"   // false
    echo NAME . "<br>";
    // echo name;

    // Constants are Global
    define("Farewell","Good Bye");
    function myTest(){
        echo Farewell;
    }
    myTest();
?>