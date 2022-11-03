<?php

include "database.php";


if (isset($_POST['signup'])) {
    $name = $_POST["uname"];
    $email = $_POST["uemail"];
    $phone = $_POST["phone"];
    $pswd = $_POST["upass"];
    $cpswd = $_POST["ucpass"];
    $errors = array();

    
    $sql_u = "select * from register where name='$name'";
    $sql_e = "select * from register where email='$email'";

    $res_u = mysqli_query($db,$sql_u);
    $res_e = mysqli_query($db,$sql_e);


    if (empty($name)) {
        $errors[1] = "Enter Name";
    } 
    
    if(mysqli_num_rows($res_u) > 0){
        $errors[1] = "Sorry.... Username already taken";
    }
   
  

    if (empty($email)) {
        $errors[2] = "Enter Email";
    }
    if(mysqli_num_rows($res_e) > 0){
        $errors[2] = "Sorry.... Email already taken";
    }

    if (empty($phone)) {
        $errors[3] = "Enter PhoneNumber";
    }

    if (empty($pswd)) {
        $errors[4] = "Enter New Password";
    }

    if (empty($cpswd)) {
        $errors[5] = "Enter Confirm Password";
    }

    if($pswd != $cpswd)
    {
        $error[5] = "Wrong Password";
    }



    if ((count($errors) == 0) && ($pswd == $cpswd)) {
        $sql = $db->prepare("insert into register (name, email, ph, password) VALUES (?,?,?,?)");
        $sql->bind_param("ssss", $name, $email, $phone, $pswd);
        $sql->execute();
        header("location:success.php");



    //     echo "<div class='alert alert-Sucess' role='alert'>
    //     Login Success <a href='login.php' class='alert-link'>Click Here</a>to login.
    //   </div>";

        

    }
}