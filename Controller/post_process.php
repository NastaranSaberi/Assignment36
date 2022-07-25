<?php
  
    session_start();   

    include "Model/database.php";

    $caption = $_POST["caption"];
    $user_id = $_SESSION["user_id"];
    
    // part 1: Add info to database
    $media = "Images/posts/" . $_FILES["media"]["name"];
    $db->query("INSERT INTO posts(caption,media,user_id) VALUES('$caption','$media','$user_id')");

    // part 2: Move image file to folder
    move_uploaded_file($_FILES["media"]["tmp_name"], $media);
   
    
   


    header("Location: home");


?>