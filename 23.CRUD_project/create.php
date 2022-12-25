<?php
    include_once("./template/header.php");
?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            Create User
                        </h5>
                        <form action="./create.php" method="post">
                            <div class="my-2">
                                <label for="name">Name</label>
                                <input type="text" name="userName" id="name" class="form-control" placeholder="Enter User Name">
                            </div>
                            <div class="my-2">
                                <label for="phone">Phone</label>
                                <input type="text" name="userPhone" id="phone" class="form-control" placeholder="Enter User Phone Number">
                            </div>
                            <button type="submit" name="createBtn" class="btn btn-secondary float-end px-5">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        require_once("./template/connection.php")
    ?>
    
    <?php
        if(isset($_POST["createBtn"])){
            $userName = $_POST["userName"];
            $userPhone = $_POST["userPhone"];

            if($userName == "" || $userName == null || $userPhone == "" || $userPhone == null){
                echo "<div class='text-danger'>Need to fill data.</div>";
            } else {
                $sql = "INSERT INTO crud (name,phone) VALUES ('$userName','$userPhone')";
                $query = mysqli_query($connection,$sql);
                
                if($query){
                    echo "<div class='alert alert-success col-2 offset-5 mt-2'>Created Success</div>";
                } else {
                    echo "<div class='alert alert-danger col-2 offset-5 mt-2'>Created Fail</div>" . mysqli_error();
                }
            }
        }
    ?>

    <?php
        require_once("./template/footer.php")
    ?>
    