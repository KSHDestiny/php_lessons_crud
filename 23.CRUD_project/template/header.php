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
<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-6 offset-2">
                <h1 class="text-muted">CRUD Project with pure PHP</h1>
            </div>
            <div class="col-2 offset-2 mt-1">
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
                        Choose Page
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li>
                            <a href="./create.php" class="dropdown-item">Create Page</a>
                        </li>
                        <li>
                            <a href="./read.php" class="dropdown-item">Read Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>