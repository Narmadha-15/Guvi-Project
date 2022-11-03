<?php
session_start();
include "database.php";
require("script.php");
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
    <div class="card col-lg-5 col-sm-6 col-6">

        <h3>Register</h3>
        <form action="" method="post" id="frm">


            <div class="form-group">
                <div class="holder">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <label for="name" class="lname">Username</label>
                </div>
                <input type="text" class="uname" name="uname" id="uname">
                <p class="text-danger"><?php if (isset($errors[1])) echo $errors[1]; ?></p>
            </div>



            <div class="form-group">
                <div class="holder">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                    </svg>

                    <label for="name">E-mail</label>
                </div>
                <input type="mail" class="uemail" name="uemail" id="uemail">
                <p class="text-danger"><?php if (isset($errors[2])) echo $errors[2]; ?></p>
            </div>



            <div class="form-group">
                <div class="holder">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                    <label for="name">Phone</label>
                </div>
                <input type="mail" class="phone" name="phone" id="phone">
                <p class="text-danger"><?php if (isset($errors[3])) echo $errors[3]; ?></p>
            </div>



            <div class="form-group">
                <div class="holder">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-lock2-fill" viewBox="0 0 16 16">
                        <path d="M7 6a1 1 0 0 1 2 0v1H7V6z" />
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z" />
                    </svg>

                    <label for="password">New Password</label>
                </div>
                <input type="password" class="pswd" name="upass" id="upass">
                <p class="text-danger"><?php if (isset($errors[4])) echo $errors[4]; ?></p>
            </div>



            <div class="form-group">
                <div class="holder">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-lock2-fill" viewBox="0 0 16 16">
                        <path d="M7 6a1 1 0 0 1 2 0v1H7V6z" />
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 6v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V8.3c0-.627.46-1.058 1-1.224V6a2 2 0 1 1 4 0z" />
                    </svg>
                    <label for="password">Confirm New Password</label>
                </div>
                <input type="password" class="cpswd" name="ucpass" id="ucpass">
                <p class="text-danger"><?php if (isset($errors[5])) echo $errors[5]; ?></p>
            </div>




            <button  class="check btn btn-primary" name="signup" id="signup">Register</button>
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