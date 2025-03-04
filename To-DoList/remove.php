<?php

if(isset($_POST['id'])){
    require 'database_conn.php';

    $id = $_POST['id'];

    if(empty($id)){
       echo 0;
    }else {
        $stmt = $conn->prepare("DELETE FROM todos WHERE id=?");
        $res = $stmt->execute([$id]);

        echo $res ? 1 : 0;
        $conn = null;
        exit();
    }
}else {
    header("Location: index.php?mess=error");
}
