<?php

if(isset($_POST['signup'])){
 
    $new_message = array(
        "name" => $_POST['uname'],
       "email" => $_POST['uemail'],
       "phone" => $_POST['phone'],
       "password" => $_POST['upass']
    );
  
    if(filesize("db.json") == 0){
       $first_record = array($new_message);
       $data_to_save = $first_record;
    }else{
       $old_records = json_decode(file_get_contents("db.json"));
       array_push($old_records, $new_message);
       $data_to_save = $old_records;
    }
  
    $encoded_data = json_encode($data_to_save, JSON_PRETTY_PRINT);
  
    if(!file_put_contents("db.json", $encoded_data, LOCK_EX)){
       $error = "Error storing message, please try again";
    }else{
       $success =  "Message is stored successfully";
    }
 }