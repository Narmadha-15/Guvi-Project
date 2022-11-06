<?php
session_start();
include "database.php";
include "process.php";


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
    <div class="card col-lg-5 col-sm-6 col-8 bg-dark">



        <h3>Register</h3>
        <form action="" method="post" id="frm">



            <div class="mb-3">
                <label class="form-label text-white">Username</label>
                <input type="text" class="form-control uname" name="uname" id="uname" placeholder="Enter name">
                <p class="text-danger"><?php if (isset($errors[1])) echo $errors[1]; ?></p>
            </div>


            <div class="mb-3">
                <label class="form-label text-white ">E-mail</label>
                <input type="mail" class=" form-control uemail" name="uemail" id="uemail" placeholder="Enter E-mail">
                <p class="text-danger"><?php if (isset($errors[2])) echo $errors[2]; ?></p>
            </div>


            <div class="mb-3">
                <label class="text-white form-label">Phone</label>
                <input type="mail" class=" form-control phone" name="phone" id="phone" placeholder="Enter Phone">
                <p class="text-danger"><?php if (isset($errors[3])) echo $errors[3]; ?></p>
            </div>


            <div class="mb-3">
                <label class="text-white form-label">New Password</label>
                <input type="password" class=" form-control pswd" name="upass" id="upass" placeholder="Enter Password">
                <p class="text-danger"><?php if (isset($errors[4])) echo $errors[4]; ?></p>
            </div>



            <div class="mb-3">
                <label class="text-white form-label">Confirm Password</label>
                <input type="password" class="form-control cpswd" name="ucpass" id="ucpass" placeholder="Confirm Password">
                <p class="text-danger"><?php if (isset($errors[5])) echo $errors[5]; ?></p>
            </div>



            <button class="check btn btn-primary mt-3" name="signup" id="signup">Register</button>
        </form>

        <div id="result"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#signup").click(function() {
                $.ajax({
                    url: "process.php",
                    type: "post",
                    data: $("#frm").serialize(),
                    success: function(d) {
                        $("#frm")[0].reset();
                    }
                })
            })
        });
    </script>
</body>


</html>