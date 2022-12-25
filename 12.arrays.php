<?php
    $cars = array("Volvo","BMW","Toyota");
    echo "<pre>";   // preformatted text
    var_dump($cars); // array(3)

    $numbers = [1,3,5,7,9];
    var_dump($numbers); // array(5)


    // indexed arrays
    $even = [2,4,6,8];
    var_dump($even);    //array(4)

    echo $even[1];  // 4

    $even[4] = 10;
    var_dump($even);    // array(5)

    $even[6] = 14;
    var_dump($even);    // array(6)
    // echo $even[5]; // error


    // count()
    $fruits = ["apple","mango","orange","banana","grape"];
    echo count($fruits);    // 5


    // associative array
    $age = [
        "Peter" => 23,
        "Harry" => 24,
        "Joe" => 21,
        "Nick" => 22 
    ];
    var_dump($age); // array(4)

    echo count($age);   // 4

    echo $age["Peter"]; // 23

    $users = [
        "Peter" => ["age" => 23 , "gender" => "male" , "job" => "designer"],
        "Harry" => ["age" => 24 , "gender" => "male" , "job" => "developer"]
    ];
    var_dump($users);   // array(2){array(3),array(3)}

    echo count($users); // 2

    var_dump($users["Peter"]);  // array(3)

    var_dump($users["Harry"]["job"]);   // developer
?>
