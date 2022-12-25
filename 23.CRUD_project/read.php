<?php
    include_once("./template/header.php");
?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered col-12">
                            <tr>
                                <th class="col-1 text-center">Id</th>
                                <th class="col-3 text-center">Name</th>
                                <th class="col-2 text-center">Phone</th>
                                <th class="col-4 text-center">Created at</th>
                                <th class='col text-center'>Update & Delete</th>
                            </tr>

                            <?php
                                require_once("./template/connection.php")
                            ?>

                            <?php
                                $sql = "SELECT * FROM crud";
                                $query = mysqli_query($connection,$sql);

                                $totalRow = mysqli_num_rows($query);
    
                                // var_dump(mysqli_fetch_assoc($query));
                                while($row = mysqli_fetch_assoc($query)){
                                    $time = date('d-M-Y h:i a',strtotime($row["created_at"]));
                                    echo "
                                        <tr>
                                            <td class='col-1 text-center'>{$row['id']}</td>
                                            <td class='col-3'>{$row['name']}</td>
                                            <td class='col-2'>{$row['phone']}</td>
                                            <td class='col-4'>$time</td>
                                            <td class='col d-flex justify-content-around'>
                                                <a href='./update.php?id={$row['id']}'><span class='btn text-primary'>Update</span></a>
                                                <a href='./delete.php?id={$row['id']}'><span class='btn text-primary'>Delete</span></a>
                                            </td>
                                        </tr>
                                    ";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        require_once("./template/footer.php")
    ?>