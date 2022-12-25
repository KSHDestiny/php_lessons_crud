<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // header("location : filepath)
        // header("location:read.php");

        $num = 20;
        if($num == 20){
            header("Location:./read.php");
        } else {
            echo "The number is not equal to 20.";
        }
    ?>
</body>
</html>