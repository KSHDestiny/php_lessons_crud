<?php
    $fruits = ["apple","mango","banana","orange","grape"];

    // count()  - numbers of array
    echo count($fruits);

    // current()    - [0]
    echo current($fruits);

    // end()    - array last indexed value
    echo end($fruits);

    // array_rand()     - random index
    echo array_rand($fruits);
    echo $fruits[array_rand($fruits)];

    // in_array(string,array)   - string is inside array or not (Boolean)
    var_dump(in_array("apple",$fruits));

    // array_sum()  - sum all integers in array
    $array = ["Hello", 20, 40,"Mello",35,90];
    echo array_sum($array);

    // range(start,end)   - build an array from start to end
    $range = range(10,15);
    echo "<pre>";
    var_dump($range);

    
    // associative array
    $user = [
        'name' => "Kaung Sat",
        'age' => 23,
        'job' => "developer"
    ];

    // array_keys()    - Show all keys in array
    var_dump(array_keys($user));

    // array_values()  - Show all values in array
    var_dump(array_values($user));

    // array_key_exists("key",array)    -   key is inside array or not (Boolean)
    var_dump(array_key_exists("age",$user));

    // shuffle()   - shuffle row in array (change actually)
    shuffle($user);
    var_dump($user);
?>