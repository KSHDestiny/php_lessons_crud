<!-- Get Method -> a "href", form, uri -->

<!-- a "href"  //  ="...?key=value&key=value" -->

 <?php
    $myAcc = [
        "name" => "kaung sat",
        "job" => "programmer"
    ];

    echo $myAcc["name"];
?>

<a href="./server.php?myName=<?php echo $myAcc['name']?>&myJob=<?php echo $myAcc['job']?>">Send to server side.</a>


<!-- form method -->

<!-- <form action="./server.php" method="get">
    <input type="text" name="name" id="" placeholder="Enter Your Name"><br>
    <input type="email" name="email" placeholder="Enter Your Email">
    <input type="submit" name="sendBtn" value="Send">
</form> -->


<!-- Post Method -> form -->

<form action="./server.php" method="post">
    <input type="text" name="name" id="" placeholder="Enter Your Name"><br>
    <input type="email" name="email" placeholder="Enter Your Email">
    <input type="submit" name="sendBtn" value="Send">
</form>
