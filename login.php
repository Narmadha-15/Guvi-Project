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

            header("location:thank.php");
        } else {
            print("<p class='alert alert-danger m-5'>Error in Login...</p>");
        }
    }
    ?>


    <div class="card col-lg-5 col-sm-6 col-6">
        <h3>Account Login</h3>
        <form action="" method="post">
            <div class="form-group">
                <div class="holder">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>

                    <label class="lblname" for="name">Username</label>
                </div>
                <input type="text" id="uname" name="uname">
            </div>
            <div class="form-group">
                <div class="holder">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-lock2-fill" viewBox="0 0 16 16">
                        <path d="M7 6a1 1 0 0 1 2 0v1H7V6z" />
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z" />
                    </svg>

                    <label class="lblname" for="password">New Password</label>
                </div>
                <input type="password" id="upass" name="upass">
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