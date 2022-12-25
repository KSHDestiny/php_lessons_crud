<?php 
    // Arithmetic Operators (+, -, *, /, %, **)
    $x = 10; $y = 5;
    echo $x + $y . "<br>"; 
    echo $x - $y . "<br>";
    echo $x * $y . "<br>";
    echo $x / $y . "<br>";
    echo $x % $y . "<br>"; // Remainder
    echo $x ** $y . "<br>" . "<br>"; // Power


    // Assignment Operators (=, +=, -=, *=, /=, %=)
    $x = 10;
    echo $x . "<br>"; // 10

    $x=20;
    $x += 100;  // $x = $x + 100
    echo $x . "<br>"; // 120

    $x = 50;
    $x -= 30;   // $x = $x - 30
    echo $x . "<br>"; // 20

    $x = 5;
    $x *= 6;    // $x = $x * 6
    echo $x . "<br>"; // 30

    $x = 10;
    $x /= 5;    // $x = $x / 5
    echo $x . "<br>"; // 2

    $x = 15;
    $x %= 4;    // $x = $x % 4
    echo $x . "<br>" . "<br>"; // 3


    // Comparison Operators (==, ===, !=, !==, >, <, >=, <=)
    $x = 100; $y = "100";
    var_dump($x == $y); // true
    echo "<br>";

    $x = 100; $y = "100";
    var_dump($x === $y); // false
    echo "<br>";

    $x = 100; $y = "100";
    var_dump($x != $y); // false
    echo "<br>";

    $x = 100; $y = "100";
    var_dump($x !== $y); // true
    echo "<br>";

    $x = 100; $y = 50;
    var_dump($x > $y); // true
    echo "<br>";

    $x = 10; $y = 100;
    var_dump($x < $y); // true
    echo "<br>";

    $x = 50; $y = 50;
    var_dump($x >= $y); // true
    echo "<br>";

    $x = 50; $y = 50;
    var_dump($x <= $y); // true
    echo "<br>";
    echo "<br>";


    // Increment | Decrement Operators (++$x, $x++, --$x, $x--)
    $x = 10;
    echo ++$x. "<br>"; // 11
    echo $x. "<br>". "<br>"; // 11

    $x = 10;
    echo $x++. "<br>"; // 10
    echo $x. "<br>". "<br>"; // 11

    $x = 10;
    echo --$x. "<br>"; // 9
    echo $x. "<br>". "<br>"; // 9

    $x = 10;
    echo $x--. "<br>"; // 10
    echo $x. "<br>". "<br>"; // 9


    // Logical Operators (&&, ||, !)
    $a = 100; 
    $b = 50;
    if($a == 100 && $b == 50){
        echo "Hello World<br>"; // Hello World
    }

    if($a == 100 || $b == 80){
        echo "Hello Mello<br>"; // Hello Mello
    }

    if(!empty($x)){
        echo "Good Morning<br><br>"; // Good Morning
    }


    // String Operators (.=)
    $txt1 = "Hello ";
    $txt2 = "Mello";
    $txt1 .= $txt2; // $txt1 = $txt1 . $txt2
    echo $txt1; // Hello Mello


    // Array Operators (+)
    $x = ["a" => "red", "b" => "green"];
    $y = ["c" => "blue","d" => "yellow"];
    $array = $x + $y;
    var_dump($array);
    echo "<br><br>";


    // Conditional Assignment Operator ( ? : )  // Ternary Operator
    $status = "Hello";
    echo $status == "Hello"? "This is Hello." : "This is other.";
?>