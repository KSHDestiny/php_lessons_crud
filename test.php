<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="submitBtn" value="Submit">
    </form>

    <?php 
        echo isset($_POST["submitBtn"]);
        $name = "aung aung";
        echo $name == "aung aung";
    ?>
</body>
</html>