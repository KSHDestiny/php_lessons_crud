<!-- 
    // while
    while (condition){
        statement;
    }

    // do while
    do {
        statement;
    } while(condition)
 -->

 <?php
    $num = 1;
    while($num <= 10){
        echo $num . "<br>";
        $num++;
    }

    $num = 1;
    do {
        echo $num . "<br>";
        $num += $num;
    } while($num <= 20)
 ?>
<br><br>
 <!-- 
    // for
    for(declare; condition; increment/decrement){
        statement;
    }

    //foreach
    foreach(array as parameter){
        statement;
    }
  -->

  <?php
    $fruits = ["Apple","Orange","Banana","Mango"];
    echo count($fruits);
    echo "<br>";

    for($i=0; $i < count($fruits); $i++){
        echo "This is " . $fruits[$i] . ".<br>";
    }

    echo "<br>";

    $numbers = range(1,10); // [1,2,3,...,9,10]
    // echo "<pre>";
    // var_dump($numbers);
    foreach($numbers as $number){
        echo "The number is " . $number . "<br>";
    }
  ?>