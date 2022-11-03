<?php
session_start();
include "database.php";


if (!isset($_SESSION["ID"])) {
    header("location:login.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="col-lg-6 col-md-8 mx-auto m-5">
        <h1 class="fw-light">Welcome <?= $_SESSION["NAME"] ?></h1>
        <p class="lead text-muted">Login Successfull.</p>
        <p>
            <a href="#" class="btn btn-primary my-2">Get Started</a>
            <a href="#" class="btn btn-success my-2">Content</a>
        </p>
    </div>
</body>

</html>