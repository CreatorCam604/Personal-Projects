<?php

if(isset($_POST['id'])){
    require 'database_conn.php';  

    $id = $_POST['id'];

    if(empty($id)){
       echo 'error';
    }else {
        $stmt = $conn->prepare("SELECT id, checked FROM todos WHERE id=?");
        $stmt->execute([$id]);
        $todo = $stmt->fetch();

        if ($todo) {
            $uId = $todo['id'];
            $checked = $todo['checked'];
            $uChecked = $checked ? 0 : 1;

            $updateStmt = $conn->prepare("UPDATE todos SET checked=? WHERE id=?");
            $res = $updateStmt->execute([$uChecked, $uId]);

            echo $res ? $uChecked : "error";
        } else {
            echo "error";
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: index.php?mess=error");
}
