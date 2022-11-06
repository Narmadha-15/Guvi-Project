<?php
session_start();
include "database.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php

    if (isset($_POST["submit"])) {

        $name = $_POST["uname"];
        $pass = $_POST["upass"];
        $sql = "select * from register where name='{$name}' and password='{$pass}'";
        $res = $db->query($sql);


        if ($res->num_rows > 0) {

            $row = $res->fetch_assoc();
            $_SESSION["ID"] = $row["id"];
            $_SESSION["NAME"] = $row["name"];

            header("location:welcome.php");
        } else {
            print("<p class='alert alert-danger m-5'>Error in Login...</p>");
        }
    }
    ?>


    <div class="card col-lg-5 col-sm-6 col-6 bg-dark">
        <div class="hold">
            <div class="tit">
                <h3>Account Login</h3>
            </div>
            
        </div>

        <form action="" method="post">

            <div class="mb-3">
                <label class="form-label text-light">Username</label>
                <input type="mail" class=" form-control uemail" id="uname" name="uname">
            </div>


            <div class="mb-3">
                <label for="name" class="form-label text-light">Password</label>
                <input type="mail" class=" form-control uemail" id="upass" name="upass">

            </div>


            <div class="more">
                <label><input type="checkbox"> Remember Me</label>
                <a href="#">Forget Password ?</a>
            </div>
            <button class="btn btn-primary" name="submit" id="signin">Sign In</button>
        </form>
    </div>
</body>

</html>