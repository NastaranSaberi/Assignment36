<?php

    include "Model/database.php"; 

    $posts = $db->query("SELECT * FROM
                        users INNER JOIN posts
                        ON users.id = posts.user_id;");

    $postha = $db->query("SELECT * FROM posts;");

    $comments = $db->query("SELECT * FROM comments INNER JOIN users ON comments.user_id = users.id;");
   

    require "View/home.php";

?>