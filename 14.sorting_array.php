<?php
    $fruits = ["apple","mango","banana","orange","grape"];

    // sort()   - ascending order
    sort($fruits);

    for($i=0; $i < count($fruits); $i++){
        echo $fruits[$i] . "<br>";
    }

    // rsort()  - descending order
    rsort($fruits);

    for($i=0; $i < count($fruits); $i++){
        echo $fruits[$i] . "<br>";
    }

    // associative array
    // ass_array-order -> integer, capital letter, small letter
    $user = [
        'name' => "Kaung Sat",
        'age' => 23,
        'job' => "developer"
    ];

    // asort()  - ascending value order
    asort($user);
    echo "<pre>";
    var_dump($user);

    // arsort() - descending value order
    arsort($user);
    var_dump($user);

    // ksort()  - ascending key order
    ksort($user);
    var_dump($user);

    // krsort() - descending key order
    krsort($user);
    var_dump($user);
?>