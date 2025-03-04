<?php

if(isset($_POST['title'])){
    require 'database_conn.php';

    $title = trim($_POST['title']);  

    if(empty($title)){
        header("Location: index.php?mess=error");
    }else{
        $stmt = $conn->prepare("INSERT INTO todos(title) VALUES(?)");  
        $res = $stmt->execute([$title]);

        if($res){
            header("Location: index.php?mess=success");
        }else{
            header("Location: index.php?mess=error");
        }
        $conn = null;
        exit();
    }
}else{
    header("Location: index.php?mess=error"); 
}
