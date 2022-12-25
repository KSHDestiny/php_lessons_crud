<!-- User Defined Function -->

<!-- function functionName(){
    statement; 
}
functionName(); -->

<?php 
    // void function
    function writeMsg(){
        echo "Hello Mello" . "<br>";
    }
    writeMsg();

    // Arguments function 
    // one argument 
    function userName($name){
        echo $name . " is your account name." . "<br>";
    }
    userName("Aung Aung");
    userName("Mya Mya");

    // two arguments
    function account($name,$age){
        echo "My name is " . $name . " and I am " . $age . " years old." . "<br>";
    }
    account("Mg Mg", 23);

    // default argument
    function user($name = "Kyaw Kyaw", $weight = 140) {
        echo $name . " has " . $weight . " lb in weight." . "<br>";
    }
    user();


    // Type Function    (return)
    function addNumbers($a,$b){
        return $a + $b;
    }
    $result = addNumbers(5,10);
    echo $result . "<br>";


    // Scope
    $fruit = "Mango";
    function food(){
        $fruit = "Apple";
        echo "Inside " . $fruit . "<br>";
    }
    food();

    echo "Outside ". $fruit;
?>