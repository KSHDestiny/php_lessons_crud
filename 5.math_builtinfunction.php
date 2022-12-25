<!-- pi()
min(array)
max(array)
abs(x)  // |x|
sqrt(x)
round(x) // float
rand(start,end)
ceil(x) // float
floor(x) // float -->

<?php 
    echo pi() . "<br>"; // 3.141...
    echo min([3,5,1,-10,30,"aung aung"]) . "<br>";   // -10
    echo max([3,5,1,-10,30]) . "<br>";   // 30
    echo abs(-10) . "<br>";     // 10
    echo sqrt(121) . "<br>";    // 121
    echo round(12.50) . "<br>";     // 13
    echo rand(0,100) . "<br>";      // 47
    echo ceil(8.1) . "<br>";    // 9
    echo floor(4.7);    // 4
?>