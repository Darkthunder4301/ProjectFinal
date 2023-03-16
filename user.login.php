<?php
    session_start();
    
    include("connect.inc.php");
    $email_tel = $_POST['email_tel'];
    $password = $_POST['password'];

    $sql = "select * from users where email = '$email_tel' or tel = '$email_tel' and password = '$password'";

    $qUser = $conn->query($sql);
    $num_row  = $qUser->num_rows;
    $user = $qUser->fetch_object();
    if($user->id>=10){
        if($num_row==1){
            unset($_SESSION['errMsg']);
            $_SESSION['user']=$user;
            header("location: index.php"); 
        }else{
            $_SESSION['errMsg'] = "Incorrect email or password!";
            header("location: login.php");
        }
    }else{
        if($num_row==1){
            unset($_SESSION['errMsg']);
            $_SESSION['user']=$user;
            header("location: admin.php"); 
        }else{
            $_SESSION['errMsg'] = "Incorrect email or password!";
            header("location: login.php");
        }
    }
?>