<?php
    include("connect.inc.php");
    $id = $_POST['id'];
    $sql = "DELETE FROM menu1200 WHERE id = $id";

    $qDel = $conn->query($sql);
    
    if($qDel){
        header("Location: user.order.php");
    }
?>