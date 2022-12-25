<?php
    include_once("./template/header.php");
?>

<?php
    require_once("./template/connection.php")
?>

<?php
    $id = $_GET["id"];
    $sql = "DELETE FROM crud WHERE id=$id";

    $query = mysqli_query($connection,$sql);

    if($query){
        header("location:read.php");
    } else {
        echo "Deleted Fail" . mysqli_error();
    }
?>

<?php
    require_once("./template/footer.php")
?>