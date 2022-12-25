<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<?php
require_once("./template/connection.php")
?>

<?php
    $id = $_GET["id"];

    $sql = "SELECT * FROM crud WHERE id=$id";
    $query = mysqli_query($connection,$sql);

    $data = mysqli_fetch_assoc($query);

?>


<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-2">
                <h1 class="text-muted">CRUD Project with pure PHP</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            Update User
                        </h5>
                        <form action="" method="post">
                            <input type="hidden" name="userId" value="<?php echo $data["id"] ?>">
                            <div class="my-2">
                                <label for="name">Name</label>
                                <input type="text" name="userName" id="name" class="form-control" value="<?php echo $data["name"] ?>">
                            </div>
                            <div class="my-2">
                                <label for="phone">Phone</label>
                                <input type="text" name="userPhone" id="phone" class="form-control" value="<?php echo $data["phone"]; ?>">
                            </div>
                            <button type="submit" name="updateBtn" class="btn btn-secondary float-end px-5">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    if(isset($_POST["updateBtn"])){
        $userId = $_POST["userId"];
        $userName = $_POST["userName"];
        $userPhone = $_POST["userPhone"];

        $updateSql = "UPDATE crud SET name='$userName', phone='$userPhone' WHERE id=$userId";

        $updateQuery = mysqli_query($connection,$updateSql);

        if($updateQuery){
            header("location:./read.php");
        } else {
            echo "Update error" . mysqli_error();
        }
    }
?>
<?php
    require_once("./template/footer.php")
?>